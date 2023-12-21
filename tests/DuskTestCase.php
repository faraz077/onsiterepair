/**
 * Create the RemoteWebDriver instance.
 *
 * @return \Facebook\WebDriver\Remote\RemoteWebDriver
 */
protected function driver()
{
    $options = (new ChromeOptions)->addArguments([
        '--disable-gpu',
        '--headless',
        '--window-size=1920,1080',
        '--log-level=3', // Add this line
        '--silent' // Add this line
    ]);

    return RemoteWebDriver::create(
        'http://localhost:9515', DesiredCapabilities::chrome()->setCapability(
            ChromeOptions::CAPABILITY, $options
        )
    );
}