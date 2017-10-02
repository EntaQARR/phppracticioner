<?php


class Post
{

public $title;
public $author;
public $published;

public function __construct($title, $author, $published)
{
  $this->title = $title;
  $this->author = $author;
  $this->published = $published;
}
}

$posts = [
 new Post('My first post', 'RR', true),
 new Post('My second post', 'RR', true),
 new Post('My third post', 'RR', true),
 new Post('My fourth post', 'RR', false)

];

//$unpublishedPosts = array_filter($posts, function ($post) {

//  return ! $post->published;

//}); //returns results that are "False";

//$publishedPosts = array_filter($posts, function ($post) {

//  return $post->published;

//}); //returns results that are "True";




//$modified = array_map(function ($post) {
//$post->published = true; // setting all "posts" to true.
//return $post;

//}, $posts); //unlike array_filer, with array_map you have to define the function before giving the array.


//
//
//

$titles = array_column($posts, 'author'); //Array_column allows you to pull a value from an item assigned in an array

var_dump($titles);
