<?php 
namespace com\zoho\officeintegrator\v1;

use com\zoho\officeintegrator\util\Model;

class SheetUiOptions implements Model
{

	private  $saveButton;
	private  $keyModified=array();

	/**
	 * The method to get the saveButton
	 * @return string | null A string representing the saveButton
	 */
	public  function getSaveButton()
	{
		return $this->saveButton; 

	}

	/**
	 * The method to set the value to saveButton
	 * @param string $saveButton A string
	 */
	public  function setSaveButton(string $saveButton)
	{
		$this->saveButton=$saveButton; 
		$this->keyModified['save_button'] = 1; 

	}

	/**
	 * The method to check if the user has modified the given key
	 * @param string $key A string
	 * @return int | null A int representing the modification
	 */
	public  function isKeyModified(string $key)
	{
		if(((array_key_exists($key, $this->keyModified))))
		{
			return $this->keyModified[$key]; 

		}
		return null; 

	}

	/**
	 * The method to mark the given key as modified
	 * @param string $key A string
	 * @param int $modification A int
	 */
	public  function setKeyModified(string $key, int $modification)
	{
		$this->keyModified[$key] = $modification; 

	}
} 