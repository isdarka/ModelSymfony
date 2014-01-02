<?php
/**
 *
 * @author isdarka
 * @created Nov 24, 2013 7:00:16 PM
 */

namespace Model\Metadata;

use Model\Interfaces\MetadataInterface;
use Model\Bean\AbstractBean;
use Model\Factory\AbstractFactory;
use Model\Collection\AbstractCollection;

abstract class AbstractMetadata implements MetadataInterface
{
	
	/**
	 * @return array
	 */
	abstract public static function toUpdateArray(AbstractBean $bean);
	
	/**
	 * @return array
	*/
	abstract public static function toCreateArray(AbstractBean $bean);
	
	/**
	 * @return string
	 */
	abstract public static function getEntityName();
	
	/**
	 * @return string
	*/
	abstract public static function getTablename();
	
	
	/**
	 * @return string
	*/
	abstract public static function getPrimaryKey();
	
	/**
	 * @return AbstractFactory
	 */
	abstract public static function getFactory();
	
	/**
	 * @return AbstractCollection
	 */
	abstract public static function newCollection();
	
	/**
	 * @return AbstractBean
	 */
	abstract public static function newBean();
	
	/**
	 * @return array
	*/
// 	public static function getFields();
	
	/**
	 * @return boolean
	*/
// 	public static function isBean($bean);
	
	
	
	
// 	public static function getCatalog();
	

}