<?php

  $cache_life = 1 * 60 * 60;
  $current = "";
  $id = "";
  $kind = "";
  $size = "";
  $token = "";
  $objects = array();
  $more = false;
  $cache = true;
  
  function end_tag($parser, $data) { }
  
  function start_tag($parser, $name, $attribs) {
    global $current;
    global $objects;
    $current = $name;
    switch ($current) {
      case "SPOTLIGHT":
        global $id;
        global $kind;
        $id = $attribs["ID"];
        $objects[$id] = array();
        $objects[$id]["id"] = $id;
        $kind = "spotlights";
        break;
      case "NEWSITEM":
        global $id;
        global $kind;
        $id = $attribs["ID"];
        $objects[$id] = array();
        $objects[$id]["id"] = $id;
        $kind = "news";
        break;
      case "EVENT":
        global $id;
        global $kind;
        $id = $attribs["ID"];
        $allDay = $attribs["ALLDAY"];
        $objects[$id] = array();
        $objects[$id]["id"] = $id;
        $objects[$id]["allday"] = $allDay;
        $kind = "events";
        break;
      case "MEDIA":
        global $id;
        global $kind;
        $id = $attribs["ID"];
        $objects[$id] = array();
        $objects[$id]["id"] = $id;
        $kind = "media";
        break;
      case "DISCUSSION":
        global $id;
        global $kind;
        $id = $attribs["ID"];
        $objects[$id] = array();
        $objects[$id]["id"] = $id;
        $kind = "discussions";
        break;
      case "THUMBNAILURL":
        global $size;
        $size = $attribs["SIZE"];
        break;
      case "AUDIENCE":
        global $token;
        $token = $attribs["TOKEN"];
        break;
      case "TOPIC":
        global $token;
        $token = $attribs["TOKEN"];
        break;
      case "LOCATION":
        global $latitude;
        global $longitude;
        $latitude = $attribs["LATITUDE"];
        $longitude = $attribs["LONGITUDE"];
        break;
    }
  }
  
  function tag_contents($parser, $data) {
    global $current;
    global $id;
    global $objects;
    global $kind;
    if (trim($data) != "") {
      if ($current == "TITLE") {
        $objects[$id]["title"] = (!isset($objects[$id]["title"])) ? $data : $objects[$id]["title"].$data;
      }
      if ($current == "TAGLINE") { 
        $objects[$id]["tagline"] = (!isset($objects[$id]["tagline"])) ? $data : $objects[$id]["tagline"].$data;
      }
      if ($current == "POSTEDAT") { 
        $objects[$id]["posted_at"] = (!isset($objects[$id]["posted_at"])) ? $data : $objects[$id]["posted_at"].$data;
      }
      if ($current == "SPONSOR") {
        $objects[$id]["sponsor"] = (!isset($objects[$id]["sponsor"])) ? $data : $objects[$id]["sponsor"].$data;
      }
      if ($current == "PAWCOUNT") {
        $objects[$id]["paw_count"] = (!isset($objects[$id]["paw_count"])) ? $data : $objects[$id]["paw_count"].$data;
      }
      if ($current == "COMMENTCOUNT") {
        $objects[$id]["comment_count"] = (!isset($objects[$id]["comment_count"])) ? $data : $objects[$id]["comment_count"].$data;
      }
      if ($current == "THUMBNAILURL") {
        global $size;
        $objects[$id]["thumbnail"][$size] = (!isset($objects[$id]["thumbnail"][$size])) ? $data : $objects[$id]["thumbnail"][$size].$data;
      }
      if ($current == "ATTACHMENTKIND") {
        $objects[$id]["attachment_kind"] = (!isset($objects[$id]["attachment_kind"])) ? $data : $objects[$id]["attachment_kind"].$data;
      }
      if ($current == "ATTACHMENTURL") {
        $objects[$id]["attachment_url"] = (!isset($objects[$id]["attachment_url"])) ? $data : $objects[$id]["attachment_url"].$data;
      }
      if ($current == "WEBSITE") {
        $objects[$id]["website"] = (!isset($objects[$id]["website"])) ? $data : $objects[$id]["website"].$data;
      }
      if ($current == "TAG") {
        $objects[$id]["tags"][$data] = (!isset($objects[$id]["tags"][$data])) ? $data : $objects[$id]["tags"][$data].$data;
      }
      if ($current == "AUDIENCE") {
        global $token;
        $objects[$id]["audiences"][$token] = (!isset($objects[$id]["audiences"][$token])) ? $data : $objects[$id]["audiences"][$token].$data;
      }
      if ($current == "TOPIC") {
        global $token;
        $objects[$id]["topics"][$token] = (!isset($objects[$id]["topics"][$token])) ? $data : $objects[$id]["topics"][$token].$data;
      }
      if ($current == "GROUP") {
        $objects[$id]["group"] = (!isset($objects[$id]["group"])) ? $data : $objects[$id]["group"].$data;
      }
      if ($current == "GROUPURL") {
        $objects[$id]["group_url"] = (!isset($objects[$id]["group_url"])) ? $data : $objects[$id]["group_url"].$data;
      }
      if ($current == "AVATARURL") {
        $objects[$id]["avatar_url"] = (!isset($objects[$id]["avatar_url"])) ? $data : $objects[$id]["avatar_url"].$data;
      }
      if ($current == "EDITAT") {
        $objects[$id]["edited_at"] = (!isset($objects[$id]["edited_at"])) ? $data : $objects[$id]["edited_at"].$data;
      }
              
      switch ($kind) {
        case "spotlights":
          switch ($current) {
            case "DESCRIPTION":
              $objects[$id]["description"] = (!isset($objects[$id]["description"])) ? $data : $objects[$id]["description"].$data;
              break;
            case "CAPTIONALIGN":
              $objects[$id]["caption_align"] = (!isset($objects[$id]["caption_align"])) ? $data : $objects[$id]["caption_align"].$data;
              break;
          }
          break;
        case "news":
          switch ($current) {
            case "BODY":
              $objects[$id]["body"] = (!isset($objects[$id]["body"])) ? $data : $objects[$id]["body"].$data;
              break;
          }
          break;
        case "events":
          switch ($current) {
            case "STARTDATE" :
              $objects[$id]["start_date"] = (!isset($objects[$id]["start_date"])) ? $data : $objects[$id]["start_date"].$data;
              break;
            case "ENDDATE" :
              $objects[$id]["end_date"] = (!isset($objects[$id]["end_date"])) ? $data : $objects[$id]["end_date"].$data;
              break;
            case "BODY":
              $objects[$id]["body"] = (!isset($objects[$id]["body"])) ? $data : $objects[$id]["body"].$data;
              break;
            case "SUMMARY" :
              $objects[$id]["summary"] = (!isset($objects[$id]["summary"])) ? $data : $objects[$id]["summary"].$data;
              break;
            case "LOCATION":
              global $latitude;
              global $longitude;
              $objects[$id]["location"]["name"] = (!isset($objects[$id]["location"]["name"])) ? $data : $objects[$id]["location"]["name"].$data;
              $objects[$id]["location"]["latitude"] = (!isset($objects[$id]["location"]["latitude"])) ? $latitude : $objects[$id]["location"]["latitude"].$data;
              $objects[$id]["location"]["longitude"] = (!isset($objects[$id]["location"]["longitude"])) ? $longitude : $objects[$id]["location"]["longitude"].$data;
              break;
            case "ATTENDEECOUNT":
              $objects[$id]["attendee_count"] = (!isset($objects[$id]["attendee_count"])) ? $data : $objects[$id]["attendee_count"].$data;
              break;
            case "ATTENDEEMAX":
              $objects[$id]["attendee_max"] = (!isset($objects[$id]["attendee_max"])) ? $data : $objects[$id]["attendee_max"].$data;
              break;
              
          }
          break;
        case "media":
          break;
        case "discussions":
          break;
        default:
          $objects = NULL;
          break;
      }
    }
  }
  
  function parse_xml($group, $type, $params) {
    global $objects;
    global $cache;
    global $cache_life;
    $objects = array();
    
    $xml_parser = xml_parser_create();
  
    xml_set_element_handler($xml_parser, "start_tag", "end_tag");
    
    xml_set_character_data_handler($xml_parser, "tag_contents");
    
    $cache_key = md5("{$group}{$type}{$params}");

    if ($cache === false) {
      apc_delete($cache_key);
      $data = false;
    } else {
      $data = apc_fetch($cache_key);
    }

    if($cache === false || $data === false)
    {
      if (preg_match("/newsitem_\d+/i", $type)) {
        preg_match("/\d+/", $type, $matches);
        $ch = curl_init("http://my.umbc.edu/groups/".$group."/news/".$matches[0].".xml");
      } else if (preg_match("/event_\d+/i", $type)) {
        preg_match("/\d+/", $type, $matches);
        $ch = curl_init("http://my.umbc.edu/groups/".$group."/events/".$matches[0].".xml");
      } else {
        $ch = curl_init("http://my.umbc.edu/groups/".$group."/".$type.".xml".$params);
      }
      // "http://my.umbc.edu/groups/".$group."/".$type.".xml".$params
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_TIMEOUT, 30);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      $data = curl_exec($ch);
      curl_close($ch);
      
      apc_add($cache_key, $data, $cache_life);
    }
    
    if($data !== false)
    {
      if(!(xml_parse($xml_parser, $data, true)))
      {
        return false;
        //die("Error on line " . xml_get_current_line_number($xml_parser) . ": " . xml_error_string($xml_parser));
      }
      xml_parser_free($xml_parser);
      $objects = array_slice($objects, 0, sizeof($objects));
      
      if(is_null($objects))
      {
        return false;
      }
      else
      {
        if (preg_match("/newsitem_\d+|event_\d+/i", $type)) {
          return $objects[0];
        } else {
          return $objects;
        }
      }      
    }
    else
    {
      return false;
    } 
  }
?>


