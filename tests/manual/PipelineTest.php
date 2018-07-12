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


namespace Aspose\Slides\Cloud\Sdk\Tests\Manual;
 
use \Exception;
use PHPUnit\Framework\Assert;
use Aspose\Slides\Cloud\Sdk\Model\ExportFormat;
use Aspose\Slides\Cloud\Sdk\Model\Input;
use Aspose\Slides\Cloud\Sdk\Model\InputFileType;
use Aspose\Slides\Cloud\Sdk\Model\OutputFile;
use Aspose\Slides\Cloud\Sdk\Model\OutputFileType;
use Aspose\Slides\Cloud\Sdk\Model\Pipeline;
use Aspose\Slides\Cloud\Sdk\Model\RequestInputFile;
use Aspose\Slides\Cloud\Sdk\Model\Save;
use Aspose\Slides\Cloud\Sdk\Model\TaskType;
use Aspose\Slides\Cloud\Sdk\Model\Requests\PostSlidesPipelineRequest;
use Aspose\Slides\Cloud\Sdk\Api\DocumentApi;
use Aspose\Slides\Cloud\Sdk\Api\ApiException;
use Aspose\Slides\Cloud\Sdk\Tests\Api\TestBase;
use Aspose\Slides\Cloud\Sdk\Tests\Utils\TestUtils;

class PipelineTest extends TestBase
{
    private $api;

    protected function setUp()
    {
        parent::setUp();
        $this->api = new DocumentApi(null, $this->config);
    }

    /**
     * Test case for postSlidesPipeline with two files
     */
    public function testPipeline()
    {
        $file1 = new RequestInputFile();
        $file1->setType(InputFileType::REQUEST);
        $file1->setIndex(0);

        $file2 = new RequestInputFile();
        $file2->setType(InputFileType::REQUEST);
        $file2->setIndex(1);

        $input = new Input();
        $input->setTemplateData($file1);
        $input->setTemplate($file2);

        $output = new OutputFile();
        $output->setType(OutputFileType::RESPONSE);

        $task = new Save();
        $task->setFormat(ExportFormat::Pptx);
        $task->setOutput($output);
        $task->setType(TaskType::SAVE);

        $pipeline = new Pipeline();
        $pipeline->setInput($input);
        $pipeline->setTasks([ $task ]);

        $files = [ fopen("../../TestData/TemplatingCVDataWithBase64.xml", 'r'), fopen("../../TestData/TemplateCV.pptx", 'r') ];

        $request = new PostSlidesPipelineRequest($pipeline, $files);
        $result = $this->api->postSlidesPipeline($request);
        Assert::assertTrue($result->isFile());
    }
}