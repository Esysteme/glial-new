<?php

namespace Application\Model;
use \Glial\Synapse\Model;

class link__species_sub__user_main__for_sale extends Model
{
var $schema = "CREATE TABLE `link__species_sub__user_main__for_sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_main` int(11) NOT NULL,
  `id_species_main` int(11) NOT NULL,
  `id_species_sub` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `unknow` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user_main` (`id_user_main`,`id_species_main`,`id_species_sub`),
  KEY `id_species_main` (`id_species_main`),
  KEY `id_species_sub` (`id_species_sub`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8";

var $field = array("id","id_user_main","id_species_main","id_species_sub","male","female","unknow","price","date_created","date_updated");

var $validate = array(
	'id_user_main' => array(
		'reference_to' => array('The constraint to user_main.id isn\'t respected.','user_main', 'id')
	),
	'id_species_main' => array(
		'reference_to' => array('The constraint to species_main.id isn\'t respected.','species_main', 'id')
	),
	'id_species_sub' => array(
		'reference_to' => array('The constraint to species_sub.id isn\'t respected.','species_sub', 'id')
	),
	'male' => array(
		'numeric' => array('This must be an int.')
	),
	'female' => array(
		'numeric' => array('This must be an int.')
	),
	'unknow' => array(
		'numeric' => array('This must be an int.')
	),
	'price' => array(
		'numeric' => array('This must be an int.')
	),
	'date_created' => array(
		'time' => array('This must be a time.')
	),
	'date_updated' => array(
		'time' => array('This must be a time.')
	),
);

function get_validate()
{
return $this->validate;
}
}
