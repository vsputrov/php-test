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
 * Request model for deleteNotesSlidePortion operation.
 */
class DeleteNotesSlidePortionRequest
{
    /*
     * Presentation name.
     */
    public $name;

    /*
     * Slide index.
     */
    public $slideIndex;

    /*
     * Shape path.
     */
    public $path;

    /*
     * Shape index.
     */
    public $shapeIndex;

    /*
     * Paragraph index.
     */
    public $paragraphIndex;

    /*
     * Portion index.
     */
    public $portionIndex;

    /*
     * Presentation folder.
     */
    public $folder;

    /*
     * Presentation storage.
     */
    public $storage;

    /*
     * Initializes a new instance of the DeleteNotesSlidePortionRequest class.
     *  
     * @param string $name Presentation name.
     * @param int $slideIndex Slide index.
     * @param string $path Shape path.
     * @param int $shapeIndex Shape index.
     * @param int $paragraphIndex Paragraph index.
     * @param int $portionIndex Portion index.
     * @param string $folder Presentation folder.
     * @param string $storage Presentation storage.
     */
    public function __construct($name, $slideIndex, $path, $shapeIndex, $paragraphIndex, $portionIndex, $folder = null, $storage = null)
    {
        $this->name = $name;
        $this->slideIndex = $slideIndex;
        $this->path = $path;
        $this->shapeIndex = $shapeIndex;
        $this->paragraphIndex = $paragraphIndex;
        $this->portionIndex = $portionIndex;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /*
     * Presentation name.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * Presentation name.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    /*
     * Slide index.
     */
    public function get_slideIndex()
    {
        return $this->slideIndex;
    }

    /*
     * Slide index.
     */
    public function set_slideIndex($value)
    {
        $this->slideIndex = $value;
        return $this;
    }
    /*
     * Shape path.
     */
    public function get_path()
    {
        return $this->path;
    }

    /*
     * Shape path.
     */
    public function set_path($value)
    {
        $this->path = $value;
        return $this;
    }
    /*
     * Shape index.
     */
    public function get_shapeIndex()
    {
        return $this->shapeIndex;
    }

    /*
     * Shape index.
     */
    public function set_shapeIndex($value)
    {
        $this->shapeIndex = $value;
        return $this;
    }
    /*
     * Paragraph index.
     */
    public function get_paragraphIndex()
    {
        return $this->paragraphIndex;
    }

    /*
     * Paragraph index.
     */
    public function set_paragraphIndex($value)
    {
        $this->paragraphIndex = $value;
        return $this;
    }
    /*
     * Portion index.
     */
    public function get_portionIndex()
    {
        return $this->portionIndex;
    }

    /*
     * Portion index.
     */
    public function set_portionIndex($value)
    {
        $this->portionIndex = $value;
        return $this;
    }
    /*
     * Presentation folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * Presentation folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
    /*
     * Presentation storage.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * Presentation storage.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
}
