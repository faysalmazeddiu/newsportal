<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Manage extends CI_Controller {

    function grid($grid_name = NULL) {

        if (isset($grid_name) && $this->Auth_Model->is_allowed($grid_name, $_SESSION['userid'])) {
            $table_name = "bdnews_" . $grid_name;
            
       //     echo  $table_name; die();
            $crud = new grocery_CRUD();
            $crud->set_table($table_name);
            $crud->set_theme('datatables');

            switch ($table_name) {

                case 'bdnews_votes':
                    $crud->set_subject('Vote');
                    $crud->unset_texteditor('topic');
                    break;

                case 'bdnews_rashifal':
                    $crud->set_subject('Rashifal');
                    $crud->unset_texteditor('mesh', 'brisho', 'mithun', 'korkot', 'shingho', 'konna', 'tula', 'bristchik', 'dhonu', 'mokor', 'kumbho', 'meen');
                    $crud->unset_columns('mesh', 'brisho', 'mithun', 'korkot', 'shingho', 'konna', 'tula', 'bristchik', 'dhonu', 'mokor', 'kumbho', 'meen');
                    break;

                case 'bdnews_ads':
                    $crud->set_subject('Advertisement');
                    $crud->set_relation('adspace_id', 'bdnews_adspaces', 'name');
                    $crud->set_relation('company_id', 'bdnews_companies', 'name');
                    $crud->unset_texteditor('notes');
                    $crud->unset_columns('ts', 'notes', 'image_click_url');

                    $this->load->config('grocery_crud');
                    $this->config->set_item('grocery_crud_file_upload_allow_file_types', 'gif|jpeg|jpg|png');
                    $crud->set_field_upload('image_file', AD_IMAGE_UPLOAD_PATH);
                    // Image cannot be processed and rezised because they are animated GIFs
                    // $crud->callback_after_upload(array($this, '_example_callback_after_upload'));
                    break;

                case 'bdnews_adspaces':
                    $crud->set_subject('Adspace');
                    break;

                case 'bdnews_admins':
                    $crud->set_subject('Admin');
                    $crud->set_relation('group_id', 'bdnews_groups', 'name');
                    $crud->columns('username', 'group_id', 'firstname', 'lastname', 'email', 'status'); // Serial that in List
                    $crud->fields('username', 'password', 'group_id', 'firstname', 'lastname', 'email', 'status'); // Serial in Add/Edit form
                    break;

                case 'bdnews_groups':
                    $crud->set_subject('Group');
                    $crud->set_relation_n_n('grid_id', // Field in question of the base table
                            'bdnews_group_grid', // relation_table
                            'bdnews_grids', // selectiin_table
                            'group_id', // PRI KEY of the base table
                            'grid_id', // PRI KEY of the selection table
                            'name'); // Field to relate of the selection table
                    break;

                case 'bdnews_grids':
                    $crud->set_subject('Grid');
                    break;

                case 'bdnews_slider_pics':
                    $crud->set_subject('Slider Pic');
                    $this->load->config('grocery_crud');
                    $this->config->set_item('grocery_crud_file_upload_allow_file_types', 'gif|jpeg|jpg|png');
                    $crud->set_field_upload('image_file', SLIDER_PICS_UPLOAD_PATH);
                    $crud->callback_after_upload(array($this, '_example_callback_after_upload'));
                    break;

                case 'bdnews_vs':
                    $crud->set_subject('Video Sangbad');
                    $this->load->config('grocery_crud');
                    $this->config->set_item('grocery_crud_file_upload_allow_file_types', 'gif|jpeg|jpg|png');
                    $crud->set_field_upload('image_file', VS_IMG_UPLOAD_PATH);
                    $crud->callback_after_upload(array($this, '_example_callback_after_upload'));
                    break;

                case 'bdnews_news':
                    $crud->set_subject('News');
                    $crud->set_relation_n_n('category_id', 'bdnews_news_category', 'bdnews_categories', 'news_id', 'category_id', 'bangla_name');
//                    $crud->unset_fields('trace_id');
                    $crud->unset_texteditor('content');
                    $crud->columns('ts', 'category_id', 'shironam', 'image_file', /* 'image_click_url', */ 'content', 'hits' /* , 'content_html' */);
                    $crud->fields('ts', 'category_id', 'shironam', 'image_file', /* 'image_click_url', */ 'content', 'hits' /* , 'content_html' */);

                    $this->load->config('grocery_crud');
                    $this->config->set_item('grocery_crud_file_upload_allow_file_types', 'gif|jpeg|jpg|png');
                    $crud->set_field_upload('image_file', NEWS_IMAGE_UPLOAD_PATH);
                    $crud->callback_after_upload(array($this, '_example_callback_after_upload'));
                    break;

                case 'bdnews_ajker_ukti':
                    $crud->set_subject('Ajker Ukti');
                    $crud->unset_texteditor('content');
                    $crud->columns('ts', 'content', 'by_whom');
                    $crud->fields('ts', 'content', 'by_whom');
                    break;

                case 'bdnews_companies':
                    $crud->set_subject('Company');
                    $crud->unset_columns('state', 'postalcode', 'phone2', 'website', 'description');
                    break;

                case 'bdnews_vote_topics':
                    $crud->set_subject('Vote Topic');
                    $crud->unset_texteditor('topic');
                    break;

                case 'bdnews_categories':
                    $crud->set_subject('Category');
                    $crud->unset_texteditor('description');
                    $crud->unset_columns('description');
                    break;

                case 'bdnews_comments':
                    $crud->set_subject('Comment');
                    $crud->set_relation('news_id', 'bdnews_news', 'shironam');
                    $crud->unset_texteditor('content');
//                    $crud->unset_add();
                    $crud->unset_columns('name', 'email', 'trace_id');
                    break;

                case 'bdnews_votes':
                    $crud->set_subject('Vote');
//                    $crud->unset_add();
                    break;

                case 'bdnews_users':
                    $crud->set_subject('User');
//                    $crud->unset_add();
                    break;

                case 'bdnews_traces':
                    $crud->set_subject('Trace');
//                    $crud->unset_add();
                    break;

                default:
                    break;
            }
            $grid = $crud->render();
            $this->_example_output($grid);
        } else {
//  When the table name is NOT present at the parameter
//  http://localhost/bdnews/index.php/admin
//  we must anyway include the grocery CSS and JS files to keep the look same
            $this->_example_output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
        }
    }

    function _example_callback_after_upload($uploader_response, $field_info, $files_to_upload) {
        $this->load->library('image_moo');
        //Is only one file uploaded so it ok to use it with $uploader_response[0]
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)->resize_crop(UPLOAD_IMAGE_WIDTH, UPLOAD_IMAGE_HEIGHT)->save($file_uploaded, true);
        return true;
    }

    public function config() { /*  This method will be called to show the SITE CONFIG in the admin panel */

        $allowed_grids = $this->Auth_Model->get_allowed_grids($_SESSION['userid']);

        foreach ($allowed_grids as $row) { // ADMIN MENU is created here
            $display_name = '';
            if (isset($row['display_name']) || !empty($row['display_name'])) {
                $display_name = '<em><small>' . $row['display_name'] . '</small></em>';
            } else {
                $display_name = '<em><small>' . strtoupper($row['name']) . '</small></em>';
            }
            $temp['menu'][] = '<li>' . anchor('admin/manage/grid/' . $row['name'] . '/', $display_name) . '</li>'; // URL must go by $row['name']
        }

        $temp['menu'][] = '<li>' . anchor('admin/manage/config', '<em><small>' . strtoupper("site config") . '</small></em>') . '</li>';
        $data['menu'] = $this->load->view('admin/menu.php', $temp, TRUE);

        $temp['constants'] = $this->constants;
        $data['grid'] = $this->load->view('admin/config_view', $temp, TRUE);

        $this->load->view('admin/dash_view.php', $data);
        $this->_clear_cache();
    }

    function _clear_cache() {   // Test purposes only, not used anywehre
        $leave_files = array('index.html', '.htaccess');

        $dir = APPPATH . 'cache/';

        foreach (glob("$dir/*") as $file) {
            if (!in_array(basename($file), $leave_files))
                echo unlink($file);
        }
    }

    function config_save() { /*  This method will be called when we click on the SUBMIT button on the SITE CONFIG form   */
        $write_to_file = "<?php   \nif (!defined('BASEPATH'))   \nexit('No direct script access allowed');\n\n";

        foreach ($this->constants as $name => $value) {
            $v = $this->input->post($name);
            $write_to_file .= "define('$name', '$v');";
            $write_to_file .= "\n";
        }

        unlink(APPPATH . 'config/constants1.php');
        file_put_contents(APPPATH . 'config/constants1.php', $write_to_file);

        $this->_clear_cache();
    }

    public function _example_output($grid) {
        $allowed_grids = $this->Auth_Model->get_allowed_grids($_SESSION['userid']);

        foreach ($allowed_grids as $row) { // ADMIN MENU is created here
            $display_name = '';
            if (isset($row['display_name']) || !empty($row['display_name'])) {
                $display_name = '<em><small>' . $row['display_name'] . '</small></em>';
            } else {
                $display_name = '<em><small>' . strtoupper($row['name']) . '</small></em>';
            }
            $temp['menu'][] = '<li>' . anchor('admin/manage/grid/' . $row['name'] . '/', $display_name) . '</li>'; // URL must go by $row['name']
        }
        $temp['menu'][] = '<li>' . anchor('admin/manage/config', '<em><small>' . strtoupper("site config") . '</small></em>') . '</li>';
        $data['menu'] = $this->load->view('admin/menu.php', $temp, TRUE);
        $data['grid'] = $this->load->view('admin/grid.php', $grid, TRUE);
        $data['footer'] = $this->load->view('admin/footer.php', '', TRUE);
        $this->load->view('admin/dash_view.php', $data);
    }

    function __construct() {
        parent::__construct();
        session_start();
        $this->load->library('grocery_CRUD');
        $this->load->model('Auth_Model');

        if ($_SESSION['userid'] < 1) {
            redirect('admin/login');
        }
        /*  Following 4 lines ebable browser cache  */
        /*  Cache specially in backend creating too many problems and it is turned OFF in the backend   */
        if (CACHE_ON) {
            header("Cache-Control: max-age=60*60*24*30*12*8");  //30days (60sec * 60min * 24hours * 30days * 12 months * 8years)
//            header("Cache-Control: max-age=60*60*24*30*12*8, must-revalidate");  //30days (60sec * 60min * 24hours * 30days * 12 months * 8years)
//            
//            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
//            $this->output->set_header("Cache-Control: post-check=0, pre-check=0");
//            $this->output->set_header("Pragma: no-cache");
//            $this->output->cache(10);
        }
    }

    /*  This is the array with constants that will ultimately be written into config/constants1.php, 
     * which in turn will be imported by config/constants.php */

    var $constants = array(
        /*         * ****************  Elements in COL1    *********************** */
        'ON_TEST' => array('COL1', 'checkbox', ON_TEST),
        'LOGREG' => array('COL1', 'checkbox', LOGREG),
        'SEARCH' => array('COL1', 'checkbox', SEARCH),
        'BREAKING_NEWS' => array('COL1', 'checkbox', BREAKING_NEWS),
        'SHIRONAM' => array('COL1', 'checkbox', SHIRONAM),
        'SOCIAL' => array('COL1', 'checkbox', SOCIAL),
        'TABS2' => array('COL1', 'checkbox', TABS2),
        'TABS3' => array('COL1', 'checkbox', TABS3),
        'ADSPACE1' => array('COL1', 'checkbox', ADSPACE1),
        'ADSPACE2' => array('COL1', 'checkbox', ADSPACE2),
        'ADSPACE3' => array('COL1', 'checkbox', ADSPACE3),
        'ADSPACE4' => array('COL1', 'checkbox', ADSPACE4),
        'ADSPACE5' => array('COL1', 'checkbox', ADSPACE5),
        'ADSPACE6' => array('COL1', 'checkbox', ADSPACE6),
        'ADSPACE7' => array('COL1', 'checkbox', ADSPACE7),
        'ADSPACE8' => array('COL1', 'checkbox', ADSPACE8),
        'ADSPACE9' => array('COL1', 'checkbox', ADSPACE9),
        'ADSPACE10' => array('COL1', 'checkbox', ADSPACE10),
        'ADSPACE11' => array('COL1', 'checkbox', ADSPACE11),
        'ADSPACE12' => array('COL1', 'checkbox', ADSPACE12),
        'ADSPACE13' => array('COL1', 'checkbox', ADSPACE13),
        'ADSPACE14' => array('COL1', 'checkbox', ADSPACE14),
        'ADSPACE15' => array('COL1', 'checkbox', ADSPACE15),
        'ADSPACE16' => array('COL1', 'checkbox', ADSPACE16),
        'ADSPACE17' => array('COL1', 'checkbox', ADSPACE17),
        'ADSPACE18' => array('COL1', 'checkbox', ADSPACE18),
        /*  This is named CACHED_ON instead of simply CACHE because there might be another constant named CACHE already */
        'CACHE_ON' => array('COL1', 'checkbox', CACHE_ON),
        /*         * ****************  Elements in COL2    *********************** */
        'NEWS_TYPE4_LIMIT' => array('COL2', 'text', NEWS_TYPE4_LIMIT, '4'),
        'NEWS_TYPE3_LIMIT' => array('COL2', 'text', NEWS_TYPE3_LIMIT, '20'),
        'SHIRONAM_LIMIT' => array('COL2', 'text', SHIRONAM_LIMIT, '20'),
        'BREAKING_NEWS_LIMIT' => array('COL2', 'text', BREAKING_NEWS_LIMIT, '20'),
        'SHORBO_SHESH_LIMIT' => array('COL2', 'text', SHORBO_SHESH_LIMIT, '20'),
        'SHORBO_POTHITO_LIMIT' => array('COL2', 'text', SHORBO_POTHITO_LIMIT, '20'),
        'TRAILER_LENGTH_DEFAULT' => array('COL2', 'text', TRAILER_LENGTH_DEFAULT, '20'),
        'SHORBO_SHESH_TRAILER_LENGTH' => array('COL2', 'text', SHORBO_SHESH_TRAILER_LENGTH, '20'),
        'ALOCHITO_KOTHA_TRAILER_LENGTH' => array('COL2', 'text', ALOCHITO_KOTHA_TRAILER_LENGTH, '20'),
        'NEWS_TYPE3_TRAILER_LENGTH' => array('COL2', 'text', NEWS_TYPE3_TRAILER_LENGTH, '20'),
        'SHORBO_POTHITO_TRAILER_LENGTH' => array('COL2', 'text', SHORBO_POTHITO_TRAILER_LENGTH, '20'),
        'POSITIONS_123_TRAILER_LENGTH' => array('COL2', 'text', POSITIONS_123_TRAILER_LENGTH, '20'),
        'POSITIONS_456_TRAILER_LENGTH' => array('COL2', 'text', POSITIONS_456_TRAILER_LENGTH, '20'),
        'CATEGORY_TRAILER_LENGTH' => array('COL2', 'text', CATEGORY_TRAILER_LENGTH, '20'),
        'EXCERPT_LENGTH' => array('COL2', 'text', EXCERPT_LENGTH, '20'),
        'SEARCH_TRAILER_LENGTH' => array('COL2', 'text', SEARCH_TRAILER_LENGTH, '20'),
        'SEARCH_TRAILER_LENGTH_WORDS' => array('COL2', 'text', SEARCH_TRAILER_LENGTH_WORDS, '20'),
        'WORD_LIMITER_DEFAULT' => array('COL2', 'text', WORD_LIMITER_DEFAULT, '20'),
        'CACHE_TIMEOUT' => array('COL2', 'text', CACHE_TIMEOUT),
        /*         * ****************  Elements in COL3    *********************** */
        'UPLOAD_IMAGE_WIDTH' => array('COL3', 'text', UPLOAD_IMAGE_WIDTH, '20'),
        'UPLOAD_IMAGE_HEIGHT' => array('COL3', 'text', UPLOAD_IMAGE_HEIGHT, '20'),
        'NEWS_IMAGE_UPLOAD_PATH' => array('COL3', 'text', NEWS_IMAGE_UPLOAD_PATH, '20'),
        'AD_IMAGE_UPLOAD_PATH' => array('COL3', 'text', AD_IMAGE_UPLOAD_PATH, '20'),
        'SLIDER_PICS_UPLOAD_PATH' => array('COL3', 'text', SLIDER_PICS_UPLOAD_PATH, '40'),
        'VS_IMG_UPLOAD_PATH' => array('COL3', 'text', VS_IMG_UPLOAD_PATH, '40'),
        'NEWS_IMAGE_DEFAULT' => array('COL3', 'text', NEWS_IMAGE_DEFAULT, '20'),
        'AD_IMAGE_DEFAULT' => array('COL3', 'text', AD_IMAGE_DEFAULT, '20'),
        'SLIDER_PICS_DEFAULT' => array('COL3', 'text', SLIDER_PICS_DEFAULT, '40'),
        'VS_IMG_DEFAULT' => array('COL3', 'text', VS_IMG_DEFAULT, '40'),
        'SORRY_NOTHING_FOUND' => array('COL3', 'textarea', SORRY_NOTHING_FOUND, '4', '20')
    );

}