<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        /* Base Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f5f2;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Menu Header */
        .menu-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .menu-title {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            color: #2a2a2a;
            margin-bottom: 1rem;
        }

        /* Category Section */
        .category-section {
            margin-bottom: 4rem;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .category-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: #4a4a4a;
            border-bottom: 3px solid #e0b48d;
            padding-bottom: 0.5rem;
            margin-bottom: 2rem;
        }

        /* Menu Items Grid */
        .menu-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .menu-item {
            padding: 1.5rem;
            background: #fff;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .item-header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 1rem;
        }

        .item-name {
            font-weight: 700;
            font-size: 1.2rem;
            color: #2a2a2a;
        }

        .item-price {
            font-weight: 700;
            color: #c19a6b;
            font-size: 1.2rem;
        }

        .item-description {
            color: #666;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        /* Allergens */
        .allergens {
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #eee;
        }

        .allergen-tag {
            display: inline-block;
            background: #f3e9e1;
            color: #8a6d5b;
            font-size: 0.75rem;
            padding: 0.3rem 0.7rem;
            border-radius: 15px;
            margin: 0.2rem;
        }

        /* Modifiers */
        .modifiers {
            margin-top: 1rem;
        }

        .modifier-item {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .menu-title {
                font-size: 2rem;
            }

            .category-title {
                font-size: 1.5rem;
            }
        }

        /* Special Badges */
        .vegetarian {
            color: #4CAF50;
            font-weight: bold;
        }

        .spicy {
            color: #F44336;
            font-weight: bold;
        }

        /* Print Styles */
        @media print {
            body {
                background: white;
                font-size: 12pt;
            }

            .category-section {
                box-shadow: none;
                page-break-inside: avoid;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="menu-header">
            <h1 class="menu-title">Our Menu</h1>
            <p>Served with passion since 2023</p>
        </header>

        @foreach($categories as $category)
        <section class="category-section">
            <h2 class="category-title">{{ $category->name }}</h2>
            
            <div class="menu-items">
                @foreach($category->menuItems as $item)
                <div class="menu-item">
                    <div class="item-header">
                        <h3 class="item-name">{{ $item->name }}</h3>
                        <span class="item-price">${{ number_format($item->price, 2) }}</span>
                    </div>
                    
                    <p class="item-description">{{ $item->description }}</p>

                    @if($item->modifiers->count() > 0)
                    <div class="modifiers">
                        @foreach($item->modifiers as $modifier)
                        <div class="modifier-item">
                            <span>{{ $modifier->name }}</span>
                            <span>+${{ number_format($modifier->pivot->additional_price, 2) }}</span>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    @if($item->allergens->count() > 0)
                    <div class="allergens">
                        @foreach($item->allergens as $allergen)
                        <span class="allergen-tag">{{ $allergen->name }}</span>
                        @endforeach
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </section>
        @endforeach
    </div>
</body>
</html>