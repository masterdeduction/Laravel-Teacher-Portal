<?php 

/**
 * Set active page
 *
 * @param  string $uri
 * @return string
 */
function set_active($uri)
{
    return Request::is($uri) ? 'active' : '';
}
function profile_avatar($file)
{
    $default = "http://edge-uofa.com/wp-content/uploads/2015/08/blank_avatar.jpg";
    $client1 = "http://50.31.252.206/oos_franchise_semi/resources/images/photos/t_$file.jpg";
    $client2 = "http://50.31.252.206/oos_franchise_semi/resources/images/photos/t_$file.JPG";
    $client3 = "http://50.31.252.206/oos_franchise_semi/resources/images/photos/t_$file.png";

    $file_headers1 = @get_headers($client1);
    $file_headers2 = @get_headers($client2);
    $file_headers3 = @get_headers($client3);

    if (!$file_headers1[0] == 'HTTP/1.1 404 Not Found') {
        $img = $client1;
    } elseif (!$file_headers2[0] == 'HTTP/1.1 404 Not Found') {
        $img=$client2;
    } elseif (!$file_headers3[0] == 'HTTP/1.1 404 Not Found') {
        $img=$client3;
    } else {
        $img=$default;
    }
    return $img;
}
