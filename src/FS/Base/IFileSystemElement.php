<?php
namespace FS\Base;


interface IFileSystemElement
{
	/**
	 * @return IDir|null
	 */
	public function parentDir();
	
	/**
	 * @return IDir|null
	 */
	public function root();

	/**
	 * @param string|bool $to
	 * @return string
	 */
	public function relativePath($to = false);

	/**
	 * @return string
	 */
	public function fullPath();


	/**
	 * @return bool
	 */
	public function isExists();

	/**
	 * @return bool
	 */
	public function isWritable();

	/**
	 * @return bool
	 */
	public function isReadable();


	/**
	 * @return string
	 */
	public function name();
}