<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// http://localhost/bdnews/index.php/test

class Test extends CI_Controller {

    function index() {
//        $sentence = "আর্সেন ওয়েঙ্গার আর আরিয়েন রোবেনের ঠোকাঠুকিটা শুরু হয়েছিল চ্যাম্পিয়নস লিগের শেষ ষোলোর প্রথম লেগেই। ২-০ গোলে হারের পর রোবেনকে ‘ডাইভার’ বলে বিদ্রূপ করেছিলেন ওয়েঙ্গার। সে সময় অবশ্য চুপই ছিলেন ডাচ উইঙ্গার। দ্বিতীয় লেগের খেলা শেষেও একই অভিযোগ শোনার পর বেশ ভালোই ক্ষেপে গেছেন রোবেন। কড়া ভাষায় জবাব দিয়েছেন আর্সেনাল কোচের সমালোচনার।
//গত মাসে প্রথম লেগের খেলায় রোবেনকে ফাউল করে লাল কার্ড দেখেছিলেন আর্সেনাল গোলরক্ষক শেজনি। ৩৭ মিনিটের পর আর্সেনাল পরিণত হয়েছিল ১০ জনের দলে। নিজেদের মাঠে ২-০ গোলে হারের পর ক্ষুব্ধ ওয়েঙ্গার কড়া সমালোচনা করেছিলেন রোবেনের। ফিরতি লেগের খেলা শেষেও ওয়েঙ্গার মুখর হয়েছেন রোবেনের সমালোচনায়। ফরাসি এই কোচের ভাষায়, ‘রোবেন খুবই ভালো খেলোয়াড় আর খুবই ভালো ডাইভার।’ বারবার একই ধরনের খোঁচা খেয়েই বোধ হয় আর চুপ করে থাকেননি রোবেন। পাল্টা তোপ দেগেছেন ওয়েঙ্গারের দিকে, ‘আমি সব সময়ই বলি যে, যদি আপনি একজন বড় কোচ হন, তাহলে হারটা মেনে নিতে হবে। যদি জিতে যান তাহলে খুশি হবেন, সেটা উপভোগ করবেন। কিন্তু হারের পর তুচ্ছ বিষয় নিয়ে অভিযোগ শুরু করবেন না। হেরে যাওয়ার পর বড় একজন কোচের কাছ থেকে আপনি এর চেয়ে বেশি কিছু আশা করবেন।’
//শেষ বাঁশি বাজার কিছুক্ষণ আগে পেনাল্টি আদায় করে নিয়েছিলেন রোবেন। তবে পেনাল্টি থেকে গোল করে দলকে জেতানোর সহজ সুযোগটা কাজে লাগাতে পারেননি থমাস মুলার। ১-১ গোলের ড্র নিয়েই মাঠ ছাড়তে হয়েছে বায়ার্ন মিউনিখকে। জয় না পেলেও অবশ্য কোনো ক্ষতি হয়নি গতবারের শিরোপাজয়ীদের। দুই লেগ মিলিয়ে ৩-১ গোলের জয় দিয়ে ঠিকই চলে গেছে চ্যাম্পিয়নস লিগের কোয়ার্টার ফাইনালে। ওয়েবসাইট।";
//        
        $search_words = "আর্সেন ওয়েঙ্গার";
        
//                $search_words =  "গোলে";
//        
//        $this->create_excerpts($sentence, $search_words);
        
        $found = $this->search($search_words);       
        
        foreach($found as $row){
            $row['content'] = $this->create_excerpts($row['content'], $search_words);            
            $row['shironam'] = $this->hilight_sentence($row['shironam'], $search_words);
            $row['shironam'] . "<BR><BR>";
        }

    }
    
    function search($string) { /* This replaces the function in the model */
        $query = "SELECT news_id, shironam, image_file, content
                    FROM `bdnews_news` 
                    WHERE (
                    CONVERT(  `shironam` USING utf8 )       LIKE  '%" . $string . "%' OR 
                    CONVERT(  `content`  USING utf8 )       LIKE  '%" . $string . "%' OR
                    CONVERT(  `content_html` USING utf8 )   LIKE  '%" . $string . "%' OR
                    CONVERT(  `reporter` USING utf8 )       LIKE  '%" . $string . "%' 
                    )";
//                    LIMIT 0 , 30";
        return $data = $this->Helper_Model->_get_data($query);
//        return $this->_attach_trailer($data, SEARCH_TRAILER_LENGTH);
    }    
    
    function hilight_sentence($sentence, $search_words){
        $term = preg_replace('/\s+/', ' ', trim($search_words));
        $search_words = explode(' ', $term);
        
        $hilighted_search_words = array();
        foreach ($search_words as $word) {
            $hilighted_search_words[] = "<span style='background-color: yellow;'>" . $word . "</span>";
        }
        
        $hilighted_sentence = str_replace($search_words, $hilighted_search_words, $sentence);                    
        
        return $hilighted_sentence;
        
        
    }
    
    function create_excerpts($sentence, $search_words){
//        echo $sentence . "<BR><BR>";    
        
        $term = preg_replace('/\s+/', ' ', trim($search_words));
        $search_words = explode(' ', $term);
        
        $hilighted_search_words = array();
        foreach ($search_words as $word) {
            $hilighted_search_words[] = "<span style='background-color: yellow;'>" . $word . "</span>";
        }
        
        $hilighted_sentence = str_replace($search_words, $hilighted_search_words, $sentence);                    
//        print_r($hilighted_sentence  . "<BR><BR>");    
        

        $i = 0;
        $excerpts = '';
        
        while ($i < str_word_count($sentence)) {
            $senetnce_slice = implode(' ', array_slice(explode(' ', $sentence), $i, EXCERPT_LENGTH));
            $i = $i + EXCERPT_LENGTH;
            $hilighted_excerpt = str_replace($search_words, $hilighted_search_words, $senetnce_slice, $count);            
            if ($count > 0) $excerpts = $excerpts . $hilighted_excerpt . ".....";
        }       
        
        return $excerpts;
        }              

    function _attach_trailer($data, $length) {
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

    public function __construct() {
        parent::__construct();
        $this->load->model('News_Model');
    }

}
