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
use Aspose\Slides\Cloud\Sdk\Api\ThemeApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class ThemeApiTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new ThemeApi(null, $this->config);
    }

    private function getGetSlidesThemeRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesTheme", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlidesTheme", "slideIndex", "int");
        $testfolder = TestUtils::getTestValue("getSlidesTheme", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesTheme", "storage", "string");
        $request = new Requests\GetSlidesThemeRequest($testname, $testslideIndex, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesTheme
     * Read slide theme info.
     */
    public function testGetSlidesTheme()
    {
        $request = $this->getGetSlidesThemeRequest();
        $this->initialize("getSlidesTheme", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesTheme");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesThemeInvalidname()
    {
        $request = $this->getGetSlidesThemeRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesTheme", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesTheme", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesTheme", "name");
        }
    }

    public function testGetSlidesThemeInvalidslideIndex()
    {
        $request = $this->getGetSlidesThemeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlidesTheme", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesTheme", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesTheme", "slideIndex");
        }
    }

    public function testGetSlidesThemeInvalidfolder()
    {
        $request = $this->getGetSlidesThemeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesTheme", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesTheme", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesTheme", "folder");
        }
    }

    public function testGetSlidesThemeInvalidstorage()
    {
        $request = $this->getGetSlidesThemeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesTheme", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesTheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesTheme", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesTheme", "storage");
        }
    }
    private function getGetSlidesThemeColorSchemeRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesThemeColorScheme", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlidesThemeColorScheme", "slideIndex", "int");
        $testfolder = TestUtils::getTestValue("getSlidesThemeColorScheme", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesThemeColorScheme", "storage", "string");
        $request = new Requests\GetSlidesThemeColorSchemeRequest($testname, $testslideIndex, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesThemeColorScheme
     * Read slide theme color scheme info.
     */
    public function testGetSlidesThemeColorScheme()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $this->initialize("getSlidesThemeColorScheme", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesThemeColorScheme");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesThemeColorSchemeInvalidname()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesThemeColorScheme", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeColorScheme", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeColorScheme", "name");
        }
    }

    public function testGetSlidesThemeColorSchemeInvalidslideIndex()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlidesThemeColorScheme", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeColorScheme", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeColorScheme", "slideIndex");
        }
    }

    public function testGetSlidesThemeColorSchemeInvalidfolder()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesThemeColorScheme", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeColorScheme", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeColorScheme", "folder");
        }
    }

    public function testGetSlidesThemeColorSchemeInvalidstorage()
    {
        $request = $this->getGetSlidesThemeColorSchemeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesThemeColorScheme", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeColorScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeColorScheme", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeColorScheme", "storage");
        }
    }
    private function getGetSlidesThemeFontSchemeRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesThemeFontScheme", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlidesThemeFontScheme", "slideIndex", "int");
        $testfolder = TestUtils::getTestValue("getSlidesThemeFontScheme", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesThemeFontScheme", "storage", "string");
        $request = new Requests\GetSlidesThemeFontSchemeRequest($testname, $testslideIndex, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesThemeFontScheme
     * Read slide theme font scheme info.
     */
    public function testGetSlidesThemeFontScheme()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $this->initialize("getSlidesThemeFontScheme", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesThemeFontScheme");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesThemeFontSchemeInvalidname()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesThemeFontScheme", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFontScheme", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFontScheme", "name");
        }
    }

    public function testGetSlidesThemeFontSchemeInvalidslideIndex()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlidesThemeFontScheme", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFontScheme", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFontScheme", "slideIndex");
        }
    }

    public function testGetSlidesThemeFontSchemeInvalidfolder()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesThemeFontScheme", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFontScheme", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFontScheme", "folder");
        }
    }

    public function testGetSlidesThemeFontSchemeInvalidstorage()
    {
        $request = $this->getGetSlidesThemeFontSchemeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesThemeFontScheme", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFontScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFontScheme", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFontScheme", "storage");
        }
    }
    private function getGetSlidesThemeFormatSchemeRequest()
    {
        $testname = TestUtils::getTestValue("getSlidesThemeFormatScheme", "name", "string");
        $testslideIndex = TestUtils::getTestValue("getSlidesThemeFormatScheme", "slideIndex", "int");
        $testfolder = TestUtils::getTestValue("getSlidesThemeFormatScheme", "folder", "string");
        $teststorage = TestUtils::getTestValue("getSlidesThemeFormatScheme", "storage", "string");
        $request = new Requests\GetSlidesThemeFormatSchemeRequest($testname, $testslideIndex, $testfolder, $teststorage);
        return $request;
    }

    /**
     * Test case for getSlidesThemeFormatScheme
     * Read slide theme color scheme info.
     */
    public function testGetSlidesThemeFormatScheme()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $this->initialize("getSlidesThemeFormatScheme", null, null);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (Exception $ex) {
            TestUtils::assertSuccessfulException($ex, "getSlidesThemeFormatScheme");
        }
        if ($needAssertResponse) {
            Assert::assertEquals(2, intdiv(json_decode($result, true)["Code"], 100));
        }
    }

    public function testGetSlidesThemeFormatSchemeInvalidname()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $request->name = TestUtils::invalidizeValue("name", $request->name, "string");
        $this->initialize("getSlidesThemeFormatScheme", "name", $request->name);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFormatScheme", "name");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFormatScheme", "name");
        }
    }

    public function testGetSlidesThemeFormatSchemeInvalidslideIndex()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $request->slideIndex = TestUtils::invalidizeValue("slideIndex", $request->slideIndex, "int");
        $this->initialize("getSlidesThemeFormatScheme", "slideIndex", $request->slideIndex);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFormatScheme", "slideIndex");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFormatScheme", "slideIndex");
        }
    }

    public function testGetSlidesThemeFormatSchemeInvalidfolder()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $request->folder = TestUtils::invalidizeValue("folder", $request->folder, "string");
        $this->initialize("getSlidesThemeFormatScheme", "folder", $request->folder);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFormatScheme", "folder");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFormatScheme", "folder");
        }
    }

    public function testGetSlidesThemeFormatSchemeInvalidstorage()
    {
        $request = $this->getGetSlidesThemeFormatSchemeRequest();
        $request->storage = TestUtils::invalidizeValue("storage", $request->storage, "string");
        $this->initialize("getSlidesThemeFormatScheme", "storage", $request->storage);
        $needAssertResponse = false;
        try {
            $result = $this->api->getSlidesThemeFormatScheme($request);
            $needAssertResponse = true;
        } catch (ApiException $ex) {
            TestUtils::assertException($ex, "getSlidesThemeFormatScheme", "storage");
        }
        if ($needAssertResponse) {
            TestUtils::assertResponse("getSlidesThemeFormatScheme", "storage");
        }
    }
}
