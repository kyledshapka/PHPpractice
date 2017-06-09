<?php

class Post
{
	public $published;
	public $author;

	public function __construct($title, $author, $published)
	{
		$this->title = $title;
		$this->published = $published;
		$this->author = $author;
	}
}

$posts = [
	new Post('My First Post', 'KS',true ),
	new Post('My Second Post', 'KS',true),
	new Post('My Third Post', 'MP',true),
	new Post('My Fourth Post', 'AR',false),
];

# Filter through an array for only specific items.
$unpublishedPosts = array_filter( $posts, function ($post)
{
	return !$post->published;
});

# This is the same in this case as:
//foreach ( $posts as $post )
//{
//	$post->published = false;
//}

# Modify each item in the array in some way.
//$modified = array_map(function ($post) {
//	return [ 'title' =>$post->title ];
//}, $posts);

$arrayPost = array_map( function ( $post )
{
	return ( array ) $post;
}, $posts );

$authors = array_column( $posts,'author', 'title' );



##
var_dump($authors);