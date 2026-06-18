#!/usr/bin/env node

import { chromium } from 'playwright';

const redirectUrl = process.argv[2];
const returnUrlPrefix = process.argv[3];

if (!redirectUrl || !returnUrlPrefix) {
    console.error('Usage: complete-payment.mjs <redirectUrl> <returnUrlPrefix>');
    process.exit(2);
}

const cardNumber = process.env.SAFERPAY_TEST_CARD ?? '9010003150000001';
const expiry = process.env.SAFERPAY_TEST_EXPIRY ?? '12/30';
const verificationCode = process.env.SAFERPAY_TEST_CVC ?? '123';

const browser = await chromium.launch({ headless: true });
const page = await browser.newPage();

try {
    await page.goto(redirectUrl, { waitUntil: 'networkidle', timeout: 60_000 });
    await page.locator('#CardNumber').fill(cardNumber);
    await page.locator('#Expiry').fill(expiry);
    await page.locator('#VerificationCode').fill(verificationCode);
    await page.locator('#btn-card-pay').click();
    await page.waitForURL(
        (url) => url.toString().startsWith(returnUrlPrefix),
        { timeout: 120_000 },
    );
} catch (error) {
    const message = error instanceof Error ? error.message : String(error);
    console.error(message);
    process.exit(1);
} finally {
    await browser.close();
}
