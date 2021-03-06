<?php
/**
 * ExportFormat
 *
 * PHP version 5
 *
 * @category Class
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

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

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Aspose\Slides\Cloud\Sdk\Model;

use \Aspose\Slides\Cloud\Sdk\Api\ObjectSerializer;

/**
 * ExportFormat Class Doc Comment
 *
 * @category Class
 * @description Available export formats
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExportFormat
{
    /**
     * Possible values of this enum
     */
    const Pdf = 0;
    const PdfNotes = 1;
    const Xps = 2;
    const Tiff = 3;
    const Pptx = 4;
    const Odp = 5;
    const Otp = 6;
    const Ppt = 7;
    const Pps = 8;
    const Ppsx = 9;
    const Pptm = 10;
    const Ppsm = 11;
    const Potx = 12;
    const Potm = 13;
    const Html = 14;
    const Swf = 15;
    const SwfNotes = 16;
    const TiffNotes = 17;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::Pdf,
            self::PdfNotes,
            self::Xps,
            self::Tiff,
            self::Pptx,
            self::Odp,
            self::Otp,
            self::Ppt,
            self::Pps,
            self::Ppsx,
            self::Pptm,
            self::Ppsm,
            self::Potx,
            self::Potm,
            self::Html,
            self::Swf,
            self::SwfNotes,
            self::TiffNotes,
        ];
    }
}


