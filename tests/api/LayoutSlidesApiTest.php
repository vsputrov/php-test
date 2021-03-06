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


namespace Aspose\Slides\Cloud\Sdk\Tests\Api;
 
use \Exception;
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Model\Requests;
use Aspose\Slides\Cloud\Sdk\Api\LayoutSlidesApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class LayoutSlidesApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new LayoutSlidesApi(null, $this->config);
    }

    private function getGetLayoutSlideRequest()
    {
        $testname = TestUtils::getTestValue("getLayoutSlide", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getLayoutSlide", "slideIndex", "int");
        $testfolder = TestUtils::getTestValue("getLayoutSlide", "folder", "string");
        $teststorage = TestUtils::getTestValue("getLayoutSlide", "storage", "string");
        $request = new Requests\GetLayoutSlideRequest($testname, $testslideIndex, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getLayoutSlide
     * Read presentation layoutSlide info.
     */
    public function testGetLayoutSlide()
    {
        $request = $this->getGetLayoutSlideRequest();
        $this->initialize("getLayoutSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getLayoutSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetLayoutSlideInvalidname()
    {
        $request = $this->getGetLayoutSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getLayoutSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlide", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlide", "name");
        }
    }

    public function testGetLayoutSlideInvalidslideIndex()
    {
        $request = $this->getGetLayoutSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getLayoutSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlide", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlide", "slideIndex");
        }
    }

    public function testGetLayoutSlideInvalidfolder()
    {
        $request = $this->getGetLayoutSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getLayoutSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlide", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlide", "folder");
        }
    }

    public function testGetLayoutSlideInvalidstorage()
    {
        $request = $this->getGetLayoutSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getLayoutSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlide", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlide", "storage");
        }
    }
    private function getGetLayoutSlidesListRequest()
    {
        $testname = TestUtils::getTestValue("getLayoutSlidesList", "name", "string");
        $testfolder = TestUtils::getTestValue("getLayoutSlidesList", "folder", "string");
        $teststorage = TestUtils::getTestValue("getLayoutSlidesList", "storage", "string");
        $request = new Requests\GetLayoutSlidesListRequest($testname, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getLayoutSlidesList
     * Read presentation layoutSlides info.
     */
    public function testGetLayoutSlidesList()
    {
        $request = $this->getGetLayoutSlidesListRequest();
        $this->initialize("getLayoutSlidesList", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlidesList($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getLayoutSlidesList");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetLayoutSlidesListInvalidname()
    {
        $request = $this->getGetLayoutSlidesListRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getLayoutSlidesList", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlidesList", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlidesList", "name");
        }
    }

    public function testGetLayoutSlidesListInvalidfolder()
    {
        $request = $this->getGetLayoutSlidesListRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getLayoutSlidesList", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlidesList", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlidesList", "folder");
        }
    }

    public function testGetLayoutSlidesListInvalidstorage()
    {
        $request = $this->getGetLayoutSlidesListRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getLayoutSlidesList", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getLayoutSlidesList($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getLayoutSlidesList", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getLayoutSlidesList", "storage");
        }
    }
    private function getPostCopyLayoutSlideFromSourcePresentationRequest()
    {
        $testname = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "name", "string");
        $testcloneFrom = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "cloneFrom", "string");
        $testcloneFromPosition = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "cloneFromPosition", "int");
        $testcloneFromStorage = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "cloneFromStorage", "string");
        $testfolder = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "folder", "string");
        $teststorage = TestUtils::getTestValue("postCopyLayoutSlideFromSourcePresentation", "storage", "string");
        $request = new Requests\PostCopyLayoutSlideFromSourcePresentationRequest($testname, $testcloneFrom, $testcloneFromPosition, $testcloneFromStorage, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for postCopyLayoutSlideFromSourcePresentation
     * Copy layoutSlide from source presentation.
     */
    public function testPostCopyLayoutSlideFromSourcePresentation()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $this->initialize("postCopyLayoutSlideFromSourcePresentation", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "postCopyLayoutSlideFromSourcePresentation");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidname()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("postCopyLayoutSlideFromSourcePresentation", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "name");
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidcloneFrom()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->cloneFrom = TestUtils::invalidizeValue("cloneFrom", $request->cloneFrom, "string");
        $this->initialize("postCopyLayoutSlideFromSourcePresentation", "cloneFrom", $request->cloneFrom);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "cloneFrom");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "cloneFrom");
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidcloneFromPosition()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->cloneFromPosition = TestUtils::invalidizeValue("cloneFromPosition", $request->cloneFromPosition, "int");
        $this->initialize("postCopyLayoutSlideFromSourcePresentation", "cloneFromPosition", $request->cloneFromPosition);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "cloneFromPosition");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "cloneFromPosition");
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidcloneFromStorage()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->cloneFromStorage = TestUtils::invalidizeValue("cloneFromStorage", $request->cloneFromStorage, "string");
        $this->initialize("postCopyLayoutSlideFromSourcePresentation", "cloneFromStorage", $request->cloneFromStorage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "cloneFromStorage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "cloneFromStorage");
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidfolder()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("postCopyLayoutSlideFromSourcePresentation", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "folder");
        }
    }

    public function testPostCopyLayoutSlideFromSourcePresentationInvalidstorage()
    {
        $request = $this->getPostCopyLayoutSlideFromSourcePresentationRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("postCopyLayoutSlideFromSourcePresentation", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->postCopyLayoutSlideFromSourcePresentation($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "postCopyLayoutSlideFromSourcePresentation", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("postCopyLayoutSlideFromSourcePresentation", "storage");
        }
    }
    private function getPutLayoutSlideRequest()
    {
        $testname = TestUtils::getTestValue("putLayoutSlide", "name", "string");
        $testslideIndex = TestUtils::getTestValue("putLayoutSlide", "slideIndex", "int");
        $testslideDto = TestUtils::getTestValue("putLayoutSlide", "slideDto", "\Aspose\Slides\Cloud\Sdk\Model\LayoutSlide");
        $testfolder = TestUtils::getTestValue("putLayoutSlide", "folder", "string");
        $teststorage = TestUtils::getTestValue("putLayoutSlide", "storage", "string");
        $request = new Requests\PutLayoutSlideRequest($testname, $testslideIndex, $testslideDto, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for putLayoutSlide
     * Read presentation layoutSlide info.
     */
    public function testPutLayoutSlide()
    {
        $request = $this->getPutLayoutSlideRequest();
        $this->initialize("putLayoutSlide", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "putLayoutSlide");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testPutLayoutSlideInvalidname()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("putLayoutSlide", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "name");
        }
    }

    public function testPutLayoutSlideInvalidslideIndex()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("putLayoutSlide", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "slideIndex");
        }
    }

    public function testPutLayoutSlideInvalidslideDto()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->slideDto = TestUtils::invalidizeValue("slideDto", $request->slideDto, "\Aspose\Slides\Cloud\Sdk\Model\LayoutSlide");
        $this->initialize("putLayoutSlide", "slideDto", $request->slideDto);
        $needAssertResponse = false;
        try {
            $result = $this->api->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "slideDto");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "slideDto");
        }
    }

    public function testPutLayoutSlideInvalidfolder()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("putLayoutSlide", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "folder");
        }
    }

    public function testPutLayoutSlideInvalidstorage()
    {
        $request = $this->getPutLayoutSlideRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("putLayoutSlide", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->putLayoutSlide($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "putLayoutSlide", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("putLayoutSlide", "storage");
        }
    }
}
