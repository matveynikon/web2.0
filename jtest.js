const puppeteer = require('puppeteer');
var k = 1;
var z = 0;
var v = 2000;
var x = Math.floor(Math.random() * 6000 + 105000);
var j = 86400000 / (v) - x;
var l = x / 14000;
var k = 1;
async function start() {
  const url = 'https://www.youtube.com/watch?v=YHniMnZIlzg';
  const browser = await puppeteer.launch({
      args: ['--no-sandbox'],
      headless: false,
      args: ['--proxy-server=145.239.121.218:3129']
    }); 
  planA: for(var g = 3000; g > 0; g--){
    const page = await browser.newPage();
    page.setDefaultNavigationTimeout(0);
    await page.goto(url);
    await page.setViewport({ width: 1000, height: 700});
    await page.keyboard.type(' ');
    if (z < 1){
      await page.click('#toggleButton');
      z = z + 1;
    }
    for(var c = Math.floor(x / 14000); c > 0; c--){
      var h = x / l;
      console.log(h);
      await page.waitFor(h);
      element = ('.ytp-ad-skip-button-container');
      try{
        await page.click(element);
        console.log('ad');
      }
      catch{
        console.log('No ad');
      }
    }
    console.log(k);
    k += 1;
    try{
      await page.close();
    }
    catch{
      console.log('unable to close page');
    }
    finally{
      continue planA;
    }
  }
    browser.close();
}
start();