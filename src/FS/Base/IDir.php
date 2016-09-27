<?php
namespace FS\Base;


interface IDir extends IFileSystemElement
{
	/**
	 * @return IDir
	 */
	public function createDir();

	/**
	 * @return IFile
	 */
	public function createFile();

	/**
	 * @param string $name Will change only name. See move to change also the path.
	 * @return static
	 */
	public function rename($name);

	/**
	 * @param string|IDir $target
	 * @param string|bool $relativePath
	 * @return static
	 */
	public function move($target, $relativePath = false);

	/**
	 * @param string|IDir $target
	 * @param string|bool $relativePath
	 * @return IDir A new object is returned
	 */
	public function copy($target, $relativePath = false);

	/**
	 * Delete all content
	 */
	public function clean();

	/**
	 * Delete all content and the directory
	 */
	public function remove();

	/**
	 * @return bool
	 */
	public function create();

	/**
	 * Delete only if empty
	 * @return bool
	 */
	public function removeIfEmpty();

	/**
	 * @return IIterator
	 */
	public function iterate();
}