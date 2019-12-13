<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Front extends CI_Controller {

    function get_dt() {
        date_default_timezone_set("Asia/Dhaka");
        $currentDate = date("l, j F Y");

        $engDATE = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0',
            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',
            'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');

        $bangDATE = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০',
            'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর',
            'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার');
        $edt = str_replace($engDATE, $bangDATE, $currentDate);

        include_once 'class.banglaDate.php';
        $bn = new BanglaDate(time());
        $temp = $bn->get_date();
        $bdt = $temp[0] . " " . $temp[1] . " " . $temp[2];

        return "ঢাকা, " . $edt . ", " . $bdt;
    }

    function _get_view($category, $file_type) {
        $temp[$file_type] = $this->News_Model->get($category);
        return $this->load->view('front/' . $file_type . '_view', $temp, TRUE);
    }

    function _get_view_tab($categories, $file_type) {
        foreach ($categories as $row) {
            $temp[$row] = $this->News_Model->get($row);
        }
        return $this->load->view('front/' . $file_type . '_view', $temp, TRUE);
    }

    public function index() {
        include_once 'common.php';

        $TYPE1_categories = $this->Categories_Model->get("TYPE1");
        foreach ($TYPE1_categories as $row) {
            $category_name = $row['name'];
            $data[$category_name] = $this->_get_view($category_name, 'TYPE1');
        }

        $TYPE2_categories = $this->Categories_Model->get("TYPE2");
        foreach ($TYPE2_categories as $row) {
            $category_name = $row['name'];
            $data[$category_name] = $this->_get_view($category_name, 'TYPE2');
        }

        $TYPE3_categories = $this->Categories_Model->get("TYPE3");
        foreach ($TYPE3_categories as $row) {
            $category_name = $row['name'];
            $data[$category_name] = $this->_get_view($category_name, 'TYPE3');
        }

        $TYPE4_categories = $this->Categories_Model->get("TYPE4");
        foreach ($TYPE4_categories as $row) {
            $category_name = $row['name'];
            $data[$category_name] = $this->_get_view($category_name, 'TYPE4');
        }

        $ads = $this->Ads_Model->getAll();
        foreach ($ads as $row) {
            $adspace_id = $row['adspace_id'];

            if ($row['status'] === "active") {
                if (!isset($row['image_file'])) {
                    $temp['image_file'] = AD_IMAGE_UPLOAD_PATH . AD_IMAGE_DEFAULT;
                } else {
                    $temp['image_file'] = AD_IMAGE_UPLOAD_PATH . $row['image_file'];
                }
                $temp['image_click_url'] = "http://" . $row['image_click_url'];

                if ($adspace_id == 4 || $adspace_id == 8 || $adspace_id == 9) {
                    $data["adspace" . $adspace_id] = $this->load->view('front/ADSPACE_single_view', $temp, TRUE);
                } else {
                    $data["adspace" . $adspace_id] = $this->load->view('front/ADSPACE_view', $temp, TRUE);
                }
            } else
                $data["adspace" . $adspace_id] = NULL;
        }

        $temp['slider_pics'] = $this->SliderPics_Model->getAll();
        $data['slider'] = $this->load->view('front/slider_view', $temp, TRUE);

        $temp['vs_pics'] = $this->VS_Model->getAll();
        $data['video_sangbad'] = $this->load->view('front/video_sangbad_view', $temp, TRUE);

        $temp['chobi'] = $this->News_Model->get('chobir_kotha');
        $data['chobir_kotha'] = $this->load->view('front/chobir_kotha_view', $temp, TRUE);

        $temp['alochito'] = $this->News_Model->get('alochito_kotha');
        $data['alochito_kotha'] = $this->load->view('front/alochito_kotha_view', $temp, TRUE);  // Not a category, seperate table ***********

        $temp['vote'] = $this->Votes_Model->get();
        $data['vote'] = $this->load->view('front/vote_view', $temp, TRUE);

        // *********** For TABS2, either use following 3 lines, OR use the last prayer_Money_view line
//        $temp['currency'] = $this->load->view('front/currency_view', '', TRUE);
//        $temp['prayer'] = $this->load->view('front/prayer_view', '', TRUE);
//        $data['TABS2'] = $this->load->view('front/TABS2_view', $temp, TRUE); // TAB2 currency + prayer

        $temp['prayer'] = $this->Prayer_Model->getAll();
        $data['TABS2'] = $this->load->view('front/prayer_Money_view', $temp, TRUE);

        $data['rashifal'] = $this->load->view('front/rashifal_view', '', TRUE);  // Not a category, FOREIGN APPS
        $data['bbc'] = $this->load->view('front/bbc_view', '', TRUE);
        $data['TABS3'] = $this->load->view('front/TABS3_view', '', TRUE); // TAB3 weather + cricket

        $data['archive'] = $this->load->view('front/archive_view', '', TRUE);

        $data['content'] = 'front/INDEX_view.php';
        $this->load->view('front/TEMPLATE_view', $data);
    }

    function category($name) {
        include_once 'common.php';
        $category = $this->News_Model->get_category($name);

        if (empty($category)) {
            $data['content'] = NULL;
        } else {
            foreach ($category as $row)
                $data['category'][] = $this->load->view('front/CAT_EACH_view', $row, TRUE);

            $data['content'] = 'front/CAT_view.php';
        }
        $this->load->view('front/TEMPLATE_view', $data);
    }

    function search() { // USES CAT_VIEW FOR OUTPUT
        include_once 'common.php';
        $search_words = trim($this->input->post('search'));
        $category = $this->News_Model->search($search_words);

        if (empty($category)) {
            $data['content'] = NULL;
        } else {
            foreach ($category as $row)
                $data['category'][] = $this->load->view('front/CAT_EACH_view', $row, TRUE);

            $data['content'] = 'front/CAT_view.php';
        }
        $this->load->view('front/TEMPLATE_view', $data);
    }

    function archive($date) {
        include_once 'common.php';
        $archive = $this->News_Model->get_archive($date);

        if (empty($archive)) {
            $data['content'] = NULL;
        } else {
            foreach ($archive as $row)
                $data['category'][] = $this->load->view('front/CAT_EACH_view', $row, TRUE);

            $data['content'] = 'front/CAT_view.php';
        }
        $this->load->view('front/TEMPLATE_view', $data);
    }

    function detail($news_id) {
        include_once 'common.php';

        $data['detail'] = $this->News_Model->get_detail($news_id);

        $category_name = $data['detail'][0]['name'];
        $shironam = $data['detail'][0]['shironam'];

        $category = $this->News_Model->get_category($category_name);

        foreach ($category as $row)
            if ($row['shironam'] != $shironam) // Exclude this particular news from "this category other news" list below
                $data['category'][] = $this->load->view('front/CAT_EACH_view', $row, TRUE);

        $temp['comments'] = $this->Comments_Model->load($news_id);
        $data['comments'] = $this->load->view('front/comments_view', $temp, TRUE);

        $data['content'] = 'front/DETAIL_view.php';
        $this->load->view('front/TEMPLATE_view', $data);
    }

    function page($name) { // Nobangla and Callforad
        $data['dt'] = $this->get_dt();
        $data['head'] = $this->load->view('front/head_view', '', TRUE);
        $data['registration'] = $this->load->view('front/reg_view', '', TRUE);
        $data['logo'] = $this->load->view('front/logo_view', '', TRUE);
        $data['search'] = $this->load->view('front/search_view', '', TRUE);
        $data['navigation'] = $this->load->view('front/nav_view', '', TRUE); // Main Menu
        $data['footer'] = $this->load->view('front/footer_view', '', TRUE);

        $data['content'] = 'front/' . $name . '_view.php';
        $this->load->view('front/TEMPLATE_view', $data);
    }

    function cast_vote() {
        include_once 'vote.php';
        if (isset($_REQUEST['cmd'])) {
            $obj = new CAjaxPoll();
            $obj->setup();
            $obj->process($_REQUEST['cmd']);
        }
    }

    function addcomment() {
        extract($_POST);
        if ($_POST['act'] == 'add-com') {
            $news_id = htmlentities($news_id);
            $content = htmlentities($content);
            $name = htmlentities($name);
            $email = htmlentities($email);

            if (strlen($name) <= '1') {
                $name = 'Guest';
            }
            $query = "INSERT INTO bdnews_comments(news_id, content, name, email) "
                    . "VALUES('$news_id', '$content', '$name', '$email')";

            mysql_query($query);
        }
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('Ads_Model');
        $this->load->model('SliderPics_Model');
        $this->load->model('VS_Model');
        $this->load->model('News_Model');
        $this->load->model('Comments_Model');
        $this->load->model('Categories_Model');
        $this->load->model('Votes_Model');
        $this->load->model('Prayer_Model');

        /*  Following 4 lines ebable browser cache  */
        if (CACHE_ON) {
            header("Cache-Control: max-age=60*60*24*30*12*8");  //30days (60sec * 60min * 24hours * 30days * 12 months * 8years)
//            header("Cache-Control: max-age=60*60*24*30*12*8, must-revalidate");  //30days (60sec * 60min * 24hours * 30days * 12 months * 8years)
//            
//            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
//            $this->output->set_header("Cache-Control: post-check=0, pre-check=0");
//            $this->output->set_header("Pragma: no-cache");
//            $this->output->cache(CACHE_TIMEOUT);
        }
    }

}
