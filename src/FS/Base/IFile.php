<?php
namespace FS\Base;


interface IFile extends IFileSystemElement
{
	/**
	 * @param bool $eager If true, return the string after the first dot; otherwise returns the 
	 * string after the last dot (my.file.ext.name => 'file.ext.name' if true, 'name' if false).
	 * @return mixed
	 */
	public function extension($eager = false);
	
	public function truncate();
	
	public function touch();
}