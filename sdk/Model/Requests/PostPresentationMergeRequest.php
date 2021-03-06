<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose">
 *   Copyright (c) 2018 Aspose.Slides for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */


namespace Aspose\Slides\Cloud\Sdk\Model\Requests;
/*
 * Request model for postPresentationMerge operation.
 */
class PostPresentationMergeRequest
{
    /*
     * Original presentation name.
     */
    public $name;

    /*
     * with a list of presentations to merge.
     */
    public $request;

    /*
     * The storage.
     */
    public $storage;

    /*
     * The folder.
     */
    public $folder;

    /*
     * Initializes a new instance of the PostPresentationMergeRequest class.
     *  
     * @param string $name Original presentation name.
     * @param \Aspose\Slides\Cloud\Sdk\Model\PresentationsMergeRequest $request with a list of presentations to merge.
     * @param string $storage The storage.
     * @param string $folder The folder.
     */
    public function __construct($name, $request = null, $storage = null, $folder = null)
    {
        $this->name = $name;
        $this->request = $request;
        $this->storage = $storage;
        $this->folder = $folder;
    }

    /*
     * Original presentation name.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * Original presentation name.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    /*
     * with a list of presentations to merge.
     */
    public function get_request()
    {
        return $this->request;
    }

    /*
     * with a list of presentations to merge.
     */
    public function set_request($value)
    {
        $this->request = $value;
        return $this;
    }
    /*
     * The storage.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * The storage.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
    /*
     * The folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * The folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
}
