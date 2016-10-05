<?php
use PHPUnit\Framework\TestCase;

class Bmp2ImageTest extends TestCase
{
    protected $fixtureDir = null;

    public function __construct()
    {
        $this->fixtureDir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'fixtures';
    }

    public function testSuccess1Px1Bits()
    {
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'image1-1bits.bmp';
        $jpg = \Bmp2Image\Bmp2Image::make($fixture);

        $tmpFileName = tempnam('/tmp', 'test-file');
        imagejpeg($jpg, $tmpFileName);
        imagedestroy($jpg);

        $imageInfo = getimagesize($tmpFileName);

        unlink($tmpFileName);

        $this->assertEquals(1, $imageInfo[0]);
        $this->assertEquals(1, $imageInfo[1]);
        $this->assertEquals(IMG_JPG, $imageInfo[2]);
        $this->assertEquals(8, $imageInfo['bits']);
        $this->assertEquals(3, $imageInfo['channels']);
        $this->assertEquals('image/jpeg', $imageInfo['mime']);
    }

    public function testSuccess1Px1BitsPaletteSigned()
    {
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'image1-1bits-palette-signed.bmp';
        $jpg = \Bmp2Image\Bmp2Image::make($fixture);

        $tmpFileName = tempnam('/tmp', 'test-file');
        imagejpeg($jpg, $tmpFileName);
        imagedestroy($jpg);

        $imageInfo = getimagesize($tmpFileName);

        unlink($tmpFileName);

        $this->assertEquals(1, $imageInfo[0]);
        $this->assertEquals(1, $imageInfo[1]);
        $this->assertEquals(IMG_JPG, $imageInfo[2]);
        $this->assertEquals(8, $imageInfo['bits']);
        $this->assertEquals(3, $imageInfo['channels']);
        $this->assertEquals('image/jpeg', $imageInfo['mime']);
    }

    public function testSuccess1Bits()
    {
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'lena512-1bits.bmp';
        $jpg = \Bmp2Image\Bmp2Image::make($fixture);

        $tmpFileName = tempnam('/tmp', 'test-file');
        imagejpeg($jpg, $tmpFileName);
        imagedestroy($jpg);

        $imageInfo = getimagesize($tmpFileName);

        unlink($tmpFileName);

        $this->assertEquals(512, $imageInfo[0]);
        $this->assertEquals(512, $imageInfo[1]);
        $this->assertEquals(IMG_JPG, $imageInfo[2]);
        $this->assertEquals(8, $imageInfo['bits']);
        $this->assertEquals(3, $imageInfo['channels']);
        $this->assertEquals('image/jpeg', $imageInfo['mime']);
    }

    public function testSuccess4Bits()
    {
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'lena512-4bits.bmp';
        $jpg = \Bmp2Image\Bmp2Image::make($fixture);

        $tmpFileName = tempnam('/tmp', 'test-file');
        imagejpeg($jpg, $tmpFileName);
        imagedestroy($jpg);

        $imageInfo = getimagesize($tmpFileName);

        unlink($tmpFileName);

        $this->assertEquals(512, $imageInfo[0]);
        $this->assertEquals(512, $imageInfo[1]);
        $this->assertEquals(IMG_JPG, $imageInfo[2]);
        $this->assertEquals(8, $imageInfo['bits']);
        $this->assertEquals(3, $imageInfo['channels']);
        $this->assertEquals('image/jpeg', $imageInfo['mime']);
    }

    public function testSuccess8Bits()
    {
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'lena512-8bits.bmp';
        $jpg = \Bmp2Image\Bmp2Image::make($fixture);

        $tmpFileName = tempnam('/tmp', 'test-file');
        imagejpeg($jpg, $tmpFileName);
        imagedestroy($jpg);

        $imageInfo = getimagesize($tmpFileName);

        unlink($tmpFileName);

        $this->assertEquals(512, $imageInfo[0]);
        $this->assertEquals(512, $imageInfo[1]);
        $this->assertEquals(IMG_JPG, $imageInfo[2]);
        $this->assertEquals(8, $imageInfo['bits']);
        $this->assertEquals(3, $imageInfo['channels']);
        $this->assertEquals('image/jpeg', $imageInfo['mime']);
    }

    public function testSuccess8BitsPalette128()
    {
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'lena512-8bits-palette-128.bmp';
        $jpg = \Bmp2Image\Bmp2Image::make($fixture);

        $tmpFileName = tempnam('/tmp', 'test-file');
        imagejpeg($jpg, $tmpFileName);
        imagedestroy($jpg);

        $imageInfo = getimagesize($tmpFileName);

        unlink($tmpFileName);

        $this->assertEquals(512, $imageInfo[0]);
        $this->assertEquals(512, $imageInfo[1]);
        $this->assertEquals(IMG_JPG, $imageInfo[2]);
        $this->assertEquals(8, $imageInfo['bits']);
        $this->assertEquals(3, $imageInfo['channels']);
        $this->assertEquals('image/jpeg', $imageInfo['mime']);
    }

    public function testSuccess8BitsPalette145()
    {
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'lena512-8bits-palette-145.bmp';
        $jpg = \Bmp2Image\Bmp2Image::make($fixture);

        $tmpFileName = tempnam('/tmp', 'test-file');
        imagejpeg($jpg, $tmpFileName);
        imagedestroy($jpg);

        $imageInfo = getimagesize($tmpFileName);

        unlink($tmpFileName);

        $this->assertEquals(512, $imageInfo[0]);
        $this->assertEquals(512, $imageInfo[1]);
        $this->assertEquals(IMG_JPG, $imageInfo[2]);
        $this->assertEquals(8, $imageInfo['bits']);
        $this->assertEquals(3, $imageInfo['channels']);
        $this->assertEquals('image/jpeg', $imageInfo['mime']);
    }

    public function testSuccess8BitsPalette256()
    {
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'lena512-8bits-palette-256.bmp';
        $jpg = \Bmp2Image\Bmp2Image::make($fixture);

        $tmpFileName = tempnam('/tmp', 'test-file');
        imagejpeg($jpg, $tmpFileName);
        imagedestroy($jpg);

        $imageInfo = getimagesize($tmpFileName);

        unlink($tmpFileName);

        $this->assertEquals(512, $imageInfo[0]);
        $this->assertEquals(512, $imageInfo[1]);
        $this->assertEquals(IMG_JPG, $imageInfo[2]);
        $this->assertEquals(8, $imageInfo['bits']);
        $this->assertEquals(3, $imageInfo['channels']);
        $this->assertEquals('image/jpeg', $imageInfo['mime']);
    }

    public function testSuccess8BitsPaletteWeb()
    {
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'lena512-8bits-palette-web.bmp';
        $jpg = \Bmp2Image\Bmp2Image::make($fixture);

        $tmpFileName = tempnam('/tmp', 'test-file');
        imagejpeg($jpg, $tmpFileName);
        imagedestroy($jpg);

        $imageInfo = getimagesize($tmpFileName);

        unlink($tmpFileName);

        $this->assertEquals(512, $imageInfo[0]);
        $this->assertEquals(512, $imageInfo[1]);
        $this->assertEquals(IMG_JPG, $imageInfo[2]);
        $this->assertEquals(8, $imageInfo['bits']);
        $this->assertEquals(3, $imageInfo['channels']);
        $this->assertEquals('image/jpeg', $imageInfo['mime']);
    }

    public function testSuccess16Bits()
    {
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'lena512-16bits.bmp';
        $jpg = \Bmp2Image\Bmp2Image::make($fixture);

        $tmpFileName = tempnam('/tmp', 'test-file');
        imagejpeg($jpg, $tmpFileName);
        imagedestroy($jpg);

        $imageInfo = getimagesize($tmpFileName);

        unlink($tmpFileName);

        $this->assertEquals(512, $imageInfo[0]);
        $this->assertEquals(512, $imageInfo[1]);
        $this->assertEquals(IMG_JPG, $imageInfo[2]);
        $this->assertEquals(8, $imageInfo['bits']);
        $this->assertEquals(3, $imageInfo['channels']);
        $this->assertEquals('image/jpeg', $imageInfo['mime']);
    }

    public function testSuccess16BitsX()
    {
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'lena512-16bits-x.bmp';
        $jpg = \Bmp2Image\Bmp2Image::make($fixture);

        $tmpFileName = tempnam('/tmp', 'test-file');
        imagejpeg($jpg, $tmpFileName);
        imagedestroy($jpg);

        $imageInfo = getimagesize($tmpFileName);

        unlink($tmpFileName);

        $this->assertEquals(512, $imageInfo[0]);
        $this->assertEquals(512, $imageInfo[1]);
        $this->assertEquals(IMG_JPG, $imageInfo[2]);
        $this->assertEquals(8, $imageInfo['bits']);
        $this->assertEquals(3, $imageInfo['channels']);
        $this->assertEquals('image/jpeg', $imageInfo['mime']);
    }

    public function testSuccess24Bits()
    {
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'lena512-24bits.bmp';
        $jpg = \Bmp2Image\Bmp2Image::make($fixture);

        $tmpFileName = tempnam('/tmp', 'test-file');
        imagejpeg($jpg, $tmpFileName);
        imagedestroy($jpg);

        $imageInfo = getimagesize($tmpFileName);

        unlink($tmpFileName);

        $this->assertEquals(512, $imageInfo[0]);
        $this->assertEquals(512, $imageInfo[1]);
        $this->assertEquals(IMG_JPG, $imageInfo[2]);
        $this->assertEquals(8, $imageInfo['bits']);
        $this->assertEquals(3, $imageInfo['channels']);
        $this->assertEquals('image/jpeg', $imageInfo['mime']);
    }

    public function testSuccess32Bits()
    {
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'lena512-32bits.bmp';
        $jpg = \Bmp2Image\Bmp2Image::make($fixture);

        $tmpFileName = tempnam('/tmp', 'test-file');
        imagejpeg($jpg, $tmpFileName);
        imagedestroy($jpg);

        $imageInfo = getimagesize($tmpFileName);

        unlink($tmpFileName);

        $this->assertEquals(512, $imageInfo[0]);
        $this->assertEquals(512, $imageInfo[1]);
        $this->assertEquals(IMG_JPG, $imageInfo[2]);
        $this->assertEquals(8, $imageInfo['bits']);
        $this->assertEquals(3, $imageInfo['channels']);
        $this->assertEquals('image/jpeg', $imageInfo['mime']);
    }

    public function testSuccess32BitsNoSpaceInformation()
    {
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'lena512-32bits-no-space-information.bmp';
        $jpg = \Bmp2Image\Bmp2Image::make($fixture);

        $tmpFileName = tempnam('/tmp', 'test-file');
        imagejpeg($jpg, $tmpFileName);
        imagedestroy($jpg);

        $imageInfo = getimagesize($tmpFileName);

        unlink($tmpFileName);

        $this->assertEquals(512, $imageInfo[0]);
        $this->assertEquals(512, $imageInfo[1]);
        $this->assertEquals(IMG_JPG, $imageInfo[2]);
        $this->assertEquals(8, $imageInfo['bits']);
        $this->assertEquals(3, $imageInfo['channels']);
        $this->assertEquals('image/jpeg', $imageInfo['mime']);
    }


    public function testExceptionFOpen()
    {
        $this->expectException(\Exception::class);

        $fsMock = \org\bovigo\vfs\vfsStream::setup();
        $fileMock = new \org\bovigo\vfs\vfsStreamFile('image.bmp');
        $fsMock->addChild($fileMock);

        $fileMock->chmod(0300);

        \Bmp2Image\Bmp2Image::make($fileMock->url());
    }

    public function testExceptionNotFound()
    {
        $this->expectException(\Exception::class);
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'lena512-not-found.bmp';
        \Bmp2Image\Bmp2Image::make($fixture);
    }

    public function testExceptionNotBmp()
    {
        $this->expectException(\Exception::class);
        $fixture = $this->fixtureDir . DIRECTORY_SEPARATOR . 'lena512-not.bmp';
        \Bmp2Image\Bmp2Image::make($fixture);
    }
}
