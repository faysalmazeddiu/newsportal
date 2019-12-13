<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_Model extends CI_Model {

    function get($category) {

        switch ($category) {
            case 'chobir_kotha':
                $query = "SELECT n.news_id, c.name, c.bangla_name, shironam, image_file, content
                          FROM bdnews_news_category nc
                          INNER JOIN bdnews_categories c ON nc.category_id = c.category_id
                          INNER JOIN bdnews_news n ON n.news_id = nc.news_id
                          WHERE c.name LIKE '" . $category .
                        "'  ORDER BY ts DESC LIMIT 4";
                return $data = $this->Helper_Model->_get_data($query);
                break;

            case 'breaking_news':
                $query = "SELECT n.news_id, shironam
                          FROM bdnews_news_category nc
                          INNER JOIN bdnews_categories c ON nc.category_id = c.category_id
                          INNER JOIN bdnews_news n ON n.news_id = nc.news_id
                          WHERE c.name LIKE 'breaking_news'
                          ORDER BY ts DESC LIMIT " . BREAKING_NEWS_LIMIT;
                return $this->Helper_Model->_get_data($query);
                break;

            case 'alochito_kotha':
                $query = "SELECT n.news_id, shironam, content
                          FROM bdnews_news_category nc
                          INNER JOIN bdnews_categories c ON nc.category_id = c.category_id
                          INNER JOIN bdnews_news n ON n.news_id = nc.news_id
                          WHERE c.name LIKE 'alochito_kotha'
                          ORDER BY ts DESC LIMIT 1";
                $data = $this->Helper_Model->_get_data($query);
                return $this->_attach_trailer($data, ALOCHITO_KOTHA_TRAILER_LENGTH);
                break;

            case 'shironam': // Retrieves several last posted news
                $query = "SELECT news_id, shironam
                          FROM bdnews_news
                          ORDER BY ts DESC LIMIT " . SHIRONAM_LIMIT;
                return $this->Helper_Model->_get_data($query);
                break;

            case 'shorbo_shesh': // Not a category, calculated automatically
                $query = "SELECT news_id, shironam, content
                          FROM bdnews_news
                          ORDER BY ts DESC LIMIT " . SHORBO_SHESH_LIMIT;
                $data = $this->Helper_Model->_get_data($query);
                return $this->_attach_trailer($data, SHORBO_SHESH_TRAILER_LENGTH);
                break;

            case 'shorbo_pothito':  // Not a category, calculated automatically
                $query = "SELECT news_id, shironam, content
                          FROM bdnews_news
                          ORDER BY hits DESC, ts DESC LIMIT " . SHORBO_POTHITO_LIMIT;
                $data = $this->Helper_Model->_get_data($query);
                return $this->_attach_trailer($data, SHORBO_POTHITO_TRAILER_LENGTH);
                break;

            case 'ajker_ukti':
                $query = "SELECT content, by_whom
                          FROM bdnews_ajker_ukti
                          ORDER BY ts DESC LIMIT 1";
                return $this->Helper_Model->_get_data($query);
                break;

            case 'position_1':
            case 'position_2':
            case 'position_3':
            case 'position_4':
            case 'position_5':
                $query = "SELECT n.news_id, shironam, image_file, content
                          FROM bdnews_news_category nc
                          INNER JOIN bdnews_categories c ON nc.category_id = c.category_id
                          INNER JOIN bdnews_news n ON n.news_id = nc.news_id
                          WHERE c.name LIKE '" . $category .
                        "'  ORDER BY ts DESC LIMIT 1";
                $data = $this->Helper_Model->_get_data($query);
                return $this->_attach_trailer($data, POSITIONS_123_TRAILER_LENGTH);
                break;

            case 'position_6':
            case 'position_7':
            case 'position_8':
            case 'position_9':
                $query = "SELECT n.news_id, shironam, image_file, content
                          FROM bdnews_news_category nc
                          INNER JOIN bdnews_categories c ON nc.category_id = c.category_id
                          INNER JOIN bdnews_news n ON n.news_id = nc.news_id
                          WHERE c.name LIKE '" . $category .
                        "'  ORDER BY ts DESC LIMIT 1";
                $data = $this->Helper_Model->_get_data($query);
                return $this->_attach_trailer($data, POSITIONS_456_TRAILER_LENGTH);
                break;

            // TPYE3
            case 'binodon':
            case 'kheladhula':
            case 'shikkhangan':
            case 'biggan':
            case 'life_style':
            case 'jatio':
            case 'rajniti':
            case 'orthoniti':
            case 'antarjatik':
            case 'probash':
            case 'shasto':
            case 'oporadh':
            case 'durghatana':
            case 'adalat':
            case 'media':
            case 'vromon':
            case 'nari_o_shishu':
            case 'rannaghar':
            case 'rohosshomoi_prithibi':
            case 'jibon_sangram':
            case 'shompadokio':
            case 'bdtouch_special':
            case 'bdtouch_blog':
                $query = "SELECT n.news_id, c.name, c.bangla_name, shironam, image_file, content
                          FROM bdnews_news_category nc
                          INNER JOIN bdnews_categories c ON nc.category_id = c.category_id
                          INNER JOIN bdnews_news n ON n.news_id = nc.news_id
                          WHERE c.name LIKE '" . $category .
                        "'  ORDER BY ts DESC LIMIT " . NEWS_TYPE3_LIMIT;
                $data = $this->Helper_Model->_get_data($query);
                return $this->_attach_trailer($data, NEWS_TYPE3_TRAILER_LENGTH);
                break;

            // TYPE4 NO IMAGE
            case 'porikkha_falafal_vorti':
            case 'library':
                $query = "SELECT n.news_id, c.name, c.bangla_name, shironam
                          FROM bdnews_news_category nc
                          INNER JOIN bdnews_categories c ON nc.category_id = c.category_id
                          INNER JOIN bdnews_news n ON n.news_id = nc.news_id
                          WHERE c.name LIKE '" . $category .
                        "'  ORDER BY ts DESC LIMIT " . NEWS_TYPE4_LIMIT;
                return $data = $this->Helper_Model->_get_data($query);
                break;
        }
    }

    function get_category($name) {
        $query = "SELECT n.news_id, shironam, image_file, content
                          FROM bdnews_news_category nc
                          INNER JOIN bdnews_categories c ON nc.category_id = c.category_id
                          INNER JOIN bdnews_news n ON n.news_id = nc.news_id
                          WHERE c.name LIKE '" . $name .
                "'  ORDER BY ts DESC";
        $data = $this->Helper_Model->_get_data($query);
        return $this->_attach_trailer($data, CATEGORY_TRAILER_LENGTH);
    }

    function get_detail($news_id) {
        /* ts=ts here makes sure that this update does not change the timestamp value as well. A trigger is associated with
          bdnews_news that makes changes in the 'ts' field whenever an update is performed and the trigger was putting current
          timestamp in 'ts' even when only 'hits' was updated. Therefore, ts=ts makes sure that 'ts' retains the original value
          and does not get updated along with 'hits'
         */
        $query = "UPDATE bdnews_news
                  SET hits=hits+1,
                      ts=ts
                  WHERE news_id= " . $news_id;
        $this->db->query($query);

        $query = "SELECT c.name, shironam, image_file, content
                  FROM bdnews_news_category nc
                  INNER JOIN bdnews_categories c ON nc.category_id = c.category_id
                  INNER JOIN bdnews_news n ON n.news_id = nc.news_id
                  WHERE n.news_id= " . $news_id;
        return $this->Helper_Model->_get_data($query);
    }

    function get_archive($date) {
        $query = "SELECT news_id, shironam, image_file, content "
                . "FROM bdnews_news "
                . "WHERE DATE(ts) LIKE DATE('" . $date . "') "
                . "ORDER BY ts DESC";
        $data = $this->Helper_Model->_get_data($query);
        return $this->_attach_trailer($data, CATEGORY_TRAILER_LENGTH);
    }

    /*     * *********** Search Engine begins **************** */

    function search($search_words) {
        $query = "SELECT news_id, shironam, image_file, content
                    FROM `bdnews_news`
                    WHERE (
                    CONVERT(  `shironam` USING utf8 )       LIKE  '%" . $search_words . "%' OR
                    CONVERT(  `content`  USING utf8 )       LIKE  '%" . $search_words . "%' OR
                    CONVERT(  `content_html` USING utf8 )   LIKE  '%" . $search_words . "%' OR
                    CONVERT(  `reporter` USING utf8 )       LIKE  '%" . $search_words . "%'
                    )";
        $data = $this->Helper_Model->_get_data($query);

        $data1 = array();

        foreach ($data as $row) {
            $row['trailer'] = $this->create_excerpts($row['content'], $search_words);
            $row['trailer'] = $this->_word_limiter($row['trailer'], SEARCH_TRAILER_LENGTH);
            $row['shironam'] = $this->hilight_sentence($row['shironam'], $search_words);
            array_push($data1, $row);
        }
        return $data1;
    }

    function hilight_sentence($sentence, $search_words) { // Used by the search
        $term = preg_replace('/\s+/', ' ', trim($search_words));
        $search_words = explode(' ', $term);

        $hilighted_search_words = array();
        foreach ($search_words as $word) {
            $hilighted_search_words[] = "<span style='background-color: yellow;'>" . $word . "</span>";
        }
        $hilighted_sentence = str_replace($search_words, $hilighted_search_words, $sentence);
        return $hilighted_sentence;
    }

    function create_excerpts($sentence, $search_words) {  // Used by the search
        $term = preg_replace('/\s+/', ' ', trim($search_words));
        $search_words = explode(' ', $term);

        $hilighted_search_words = array();
        foreach ($search_words as $word) {
            $hilighted_search_words[] = "<span style='background-color: yellow;'>" . $word . "</span>";
        }

        $hilighted_sentence = str_replace($search_words, $hilighted_search_words, $sentence);

        $i = 0;
        $excerpts = '';

        while ($i < str_word_count($sentence)) {
            $senetnce_slice = implode(' ', array_slice(explode(' ', $sentence), $i, EXCERPT_LENGTH));
            $i = $i + EXCERPT_LENGTH;
            $hilighted_excerpt = str_replace($search_words, $hilighted_search_words, $senetnce_slice, $count);
            if ($count > 0)
                $excerpts = $excerpts . $hilighted_excerpt . ".....";
        }
        return $excerpts;
    }

    /*     * *********** Search Engine ends **************** */

    function _attach_trailer($data, $length = TRAILER_LENGTH_DEFAULT) {
        /* Takes a query result that contains for instance 'shironam' and 'content'
         * Then cut the 'content' field and introduce a new field called 'trailer'
         * And now the return array contents 3 fields  'shironam' and 'content' and 'trailer'
         * Additionally, you can specify the length of the trailer, which is by default 250
         */
        $data1 = array();

        foreach ($data as $row) {
            $row['trailer'] = $this->_word_limiter($row['content'], $length);
            array_push($data1, $row);
        }
        return $data1;
    }

    function _word_limiter($content, $length = WORD_LIMITER_DEFAULT) {
        /* Calls a grocery crud function and cut a long text field in length specified, default is 250
         *  Additionally, it adds "..." to the end
         */
        $this->load->library('grocery_CRUD');
        $crud = new grocery_CRUD();
        return $crud->character_limiter($content, $length, "...");
    }

    function __construct() {
        parent::__construct();
        $this->load->helper('text'); // to use codeigniter word_limiter function
    }

}
