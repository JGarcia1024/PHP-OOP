<?php


class child {
public $firstName;
public $lastName;
public $nickName;
public $gender;
public $weight;
public $cry;
public $laugh;
function __construct($nickName, $firstName, $lastName, $gender, $weight, $cry, $laugh) {
$this>
nickName = $nickName;
$this>
firstName = $firstName;
$this>
lastName = $lastName;
$this>
gender = $gender;
$this>
weight = $weight;
$this>
cry = $cry;
$this>
laugh = $laugh;
}
function getName() {
return “This is my child “ . $this>
firstName .
“ and last ” . $this>
lastName;
}
}
class Happy extends child {
function happy() {
return $this>
laughs”;
}
}
class Sad extends child {
function sad() {
return $this>
cries;
}
}
$sad = new Sad(“Cry”, “Tears”, “Sad”, “Red”, Loud);
print “The child is ” . $Sad>
getName();







class Music {
public $album;
public $artist;
public $melody;
public $tracks;
public $pace;
public $rock;
public $rap;
function __construct($album, $artist, $melody, $tracks, $pace, $rock, $rap) {
$this>
album = $album;
$this>
artist = $artist;
$this>
melody = $melody;
$this>
tracks = $tracks;
$this>
pace = $pace;
$this>
rock = $rock;
$this>
rap = $rap;
}
function getAlbum() {
return “This mixtape has 11 “ . $this>
tracks .
“ and different ” . $this>
artist;
}
}
class Rock extends Genre {
function Heavy() {
return $this>
rock”;
}
}
class Rap extends Genre {
function Fast() {
return $this>
rap;
}
}
$rap = new Rap(“Rap”, “2pac”, “old”, “meaningful”, good);
print “Track 3 is ” . $rap>
getName();












class Friend {
public $firstName;
public $lastName;
public $nickName;
public $gender;
public $weight;
public $female;
public $male;
function __construct($nickName, $firstName, $lastName, $gender, $weight, $female, $male) {
$this>
nickName = $nickName;
$this>
firstName = $firstName;
$this>
lastName = $lastName;
$this>
gender = $gender;
$this>
weight = $weight;
$this>
female = $female;
$this>
male = $male;
}
function getName() {
return “This is my friend “ . $this>
firstName .
“ and last ” . $this>
lastName;
}
}
class Female extends Friend {
function greet() {
return $this>
heyyy”;
}
}
class Male extends Friend {
function hello() {
return $this>
yo;
}
}
$male = new Male(“Male”, “Chill”, “Short hair”, “Height”, 18);
print “Friend 1 is a ” . $male>
getName();
















?>