<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | {{ config('app.name', 'Our Store') }}</title>
</head>
<body>

<div class="about-container" style="max-width: 800px; margin: 0 auto; padding: 40px 20px; font-family: sans-serif; line-height: 1.6; color: #333;">
    
    <header style="text-align: center; margin-bottom: 40px;">
        <h1 style="font-size: 2.5rem; margin-bottom: 10px; color: #111;">About Us</h1>
        <p style="font-size: 1.2rem; color: #666;">Welcome to {{ config('app.name', 'Our Store') }}</p>
    </header>

    <section style="margin-bottom: 40px;">
        <p style="font-size: 1.1rem; margin-bottom: 15px;">
            Welcome to <strong>{{ config('app.name', 'Our Store') }}</strong>, your go-to destination for thoughtfully curated, high-quality products designed to elevate your everyday life.
        </p>
        <p>
            We started with a simple idea: daily essentials, unique finds, and trending gear should be accessible, affordable, and completely hassle-free to buy. Today, we bridge the gap between global manufacturers and your doorstep, bringing you premium items without the premium price tag.
        </p>
    </section>

    <section style="margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; margin-bottom: 15px; color: #222;">Our Mission</h2>
        <p>
            To simplify your shopping experience by sourcing dependable, innovative, and stylish products from trusted suppliers worldwide. We handle the logistical heavy lifting so you can focus on enjoying what you buy.
        </p>
    </section>

    <section style="margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; margin-bottom: 15px; color: #222;">Why Shop With Us?</h2>
        <ul style="list-style-type: none; padding: 0;">
            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                <span style="position: absolute; left: 0; color: #007bff;">✓</span>
                <strong>Handpicked Quality:</strong> We vet every supplier and review every item to ensure it meets our strict standards before it ever reaches our catalog.
            </li>
            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                <span style="position: absolute; left: 0; color: #007bff;">✓</span>
                <strong>Direct-to-You Savings:</strong> By cutting out traditional storefront overhead, we pass the direct savings straight to you.
            </li>
            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                <span style="position: absolute; left: 0; color: #007bff;">✓</span>
                <strong>Secure Shopping:</strong> Your data safety is our priority. We use industry-standard encryption to protect your checkout experience.
            </li>
            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                <span style="position: absolute; left: 0; color: #007bff;">✓</span>
                <strong>Dedicated Support:</strong> Have a question about a tracking number or a product detail? Our customer service team is ready to help at any step of your journey.
            </li>
        </ul>
    </section>

    <section style="margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; margin-bottom: 15px; color: #222;">How We Work</h2>
        <p>
            We operate on a streamlined fulfillment model. When you place an order on our site, your product is packed and shipped directly from our partner fulfillment centers straight to your address. This modern approach keeps our inventory fresh, reduces global shipping waste, and allows us to offer free or highly competitive shipping rates across our entire catalog.
        </p>
    </section>

    <footer style="text-align: center; margin-top: 40px; padding-top: 20px; border-top: 1px solid #eee;">
        <p style="font-size: 1.1rem; font-style: italic;">Thank you for choosing {{ config('app.name', 'Our Store') }}. We are glad to have you here!</p>
    </footer>

</div>

</body>
</html>
