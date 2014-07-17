<?php

// TODO
# fix image variable
# set class name
# automate set (url) inside google function
# set popup height & width


class Share
{

    public static function facebook()
    {
        #$url = str_replace('bpi-rewrite.dev', 'bpisports.net', Request::url());
        #'http://www.facebook.com/sharer.php?u='.$url;

        $str =  "<a href=\"#\" onclick=\"window.open("
               ."'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),"
               ."'facebook-share-dialog',"
               ."'width=626,height=436');"
               ."return false;\">"

               ."<img title=\"Facebook\" class=\"ssba\" alt=\"Facebook\" src=\"".$img."\">"

               ."</a>";

        return $str;
    }

    public static function google()
    {
        $str = "<a href=\"https://plus.google.com/share?url=".$url."\" onclick=\"javascript:window.open(this.href,"
              ."'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;\">"
              ."<img src=\"".$img."\" class=\"ssba\" alt=\"Share on Google+\"/></a>";

        return $str;
    }

    public static function twitter($additional_text = FALSE)
    {
        if(isset($additional_text))
        {
            $additional_text = ' - '.$additional_text;
        }

        $str =  "<a href=\"#\" onclick=\"window.open("
            ."'https://twitter.com/share?text='+encodeURIComponent(document.title)+'".$additional_text."',"
            ."'twitter-share-dialog',"
            ."'width=626,height=436');"
            ."return false;\">"

              ."<img title=\"Twitter\" class=\"ssba\" alt=\"Twitter\" src=\"".$img."\">"
              ."</a>";

        return $str;
    }

    public static function email($subject, $body)
    {
        $str = "<a id=\"ssba_email_share\" href=\"mailto:?Subject=".strip_tags(urlencode($subject))."&Body=".$body."\">"
	           ."<img title=\"Email\" class=\"ssba\" alt=\"Email\" src=\"".$img."\">"
               ."</a>";

        return $str;
    }

}
