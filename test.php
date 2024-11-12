<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment App</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://s3.tradingview.com/tv.js"></script> <!-- TradingView Library -->
</head>

<body style="background-color: #f8f9fa; margin: 0; padding: 20px; min-height: 100vh;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: 1fr; gap: 20px; padding: 20px;">
            <!-- Investment Card -->
            <div style="background-color: white; border-radius: 15px; padding: 2rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                <h5>Buy your first stock with as little as $1</h5>
                <p style="color: #6c757d;">approx ₦1,751.48</p>

                <div style="background-color: #f8f0ff; border-radius: 20px; padding: 2rem; margin: 1.5rem 0; text-align: center;">
                    <img src="/api/placeholder/200/200" alt="Investment Illustration" style="max-width: 100%; height: auto;">
                </div>

                <h4 style="margin-top: 1.5rem;">Most Popular</h4>
                <p style="color: #6c757d;">The most commonly traded stocks in the Chipper community</p>

                <!-- PHP to loop through stock items -->
                <?php
                $stocks = [
                    [
                        'symbol' => 'BRK.B',
                        'name' => 'Berkshire Hathaway Inc. Hld B',
                        'price' => 463.51,
                        'description' => 'Berkshire Hathaway Inc. is a multinational conglomerate holding company, known for its diverse investments.',
                        'logo' => 'https://example.com/logo-brk.jpg' // Logo URL if available
                    ],
                    [
                        'symbol' => 'AAPL',
                        'name' => 'Apple Inc.',
                        'price' => 175.04,
                        'description' => 'Apple Inc. is a technology company that designs and manufactures electronics, software, and online services.',
                        'logo' => 'https://example.com/logo-aapl.jpg'
                    ]
                    // Add more stocks as needed
                ];

                foreach ($stocks as $stock) {
                    echo '
                    <div onclick="showStockDetails(\'' . $stock['symbol'] . '\', \'' . $stock['name'] . '\', ' . $stock['price'] . ', \'' . addslashes($stock['description']) . '\', \'' . ($stock['logo'] ?? '') . '\')"
                        style="display: flex; align-items: center; padding: 1rem; border-bottom: 1px solid #eee; cursor: pointer; transition: all 0.3s ease;">
                        <div style="width: 40px; height: 40px; border-radius: 50%; margin-right: 1rem; background-color: #e9ecef; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #8e44ef;">
                            ' . substr($stock['symbol'], 0, 3) . '
                        </div>
                        <div style="flex-grow: 1;">
                            <h6 style="margin-bottom: 0;">' . $stock['name'] . '</h6>
                        </div>
                        <div style="text-align: right; display: flex; align-items: center;">
                            <span style="font-size: 1rem;">$' . number_format($stock['price'], 2) . '</span>
                            <i class="fas fa-chevron-right" style="margin-left: 0.5rem;"></i>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Stock Details Modal -->
    <div id="stockModal" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: white; z-index: 1000; transform: translateY(100%); transition: transform 0.3s ease-out; overflow-y: auto;">
        <div style="padding: 1rem; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; background: white; position: sticky; top: 0; z-index: 1001;">
            <i class="fas fa-times" onclick="hideStockDetails()" style="cursor: pointer;"></i>
            <span id="stockSymbol"></span>
        </div>
        <div style="padding: 1rem;">
            <!-- Display stock logo if available -->
            <div id="modalStockLogo" style="width: 40px; height: 40px; border-radius: 50%; background-color: #e9ecef; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #8e44ef;"></div>
            <img id="stockLogo" src="" alt="Stock Logo" style="width: 100px; height: auto; display: none; margin-bottom: 1rem;">

            <h2 id="companyName">Company Name</h2>
            <div id="stockPrice" style="font-size: 2rem; font-weight: 600; margin-bottom: 0.5rem;">$0.00</div>

            <!-- Display stock description -->
            <p id="stockDescription" style="color: #6c757d;">Stock Description</p>

            <!-- TradingView Chart -->
            <div id="tradingview_chart" style="margin-top: 20px;"></div>

            <div style="margin-top: 1.5rem;">
                <button onclick="buyStock()" class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>

    <script>
        function showStockDetails(symbol, name, price, description, logoUrl) {
            document.getElementById('stockSymbol').textContent = symbol;
            document.getElementById('companyName').textContent = name;
            document.getElementById('stockPrice').textContent = `$${price.toFixed(2)}`;
            document.getElementById('stockDescription').textContent = description;

            // Check if logo URL is provided and display it, else show default symbol
            if (logoUrl) {
                document.getElementById('stockLogo').src = logoUrl;
                document.getElementById('stockLogo').style.display = 'block';
                document.getElementById('modalStockLogo').style.display = 'none';
            } else {
                document.getElementById('stockLogo').style.display = 'none';
                document.getElementById('modalStockLogo').textContent = symbol.split('.')[0];
                document.getElementById('modalStockLogo').style.display = 'flex';
            }

            document.getElementById('stockModal').style.transform = 'translateY(0)';
            loadTradingViewChart(symbol);
        }

        function hideStockDetails() {
            document.getElementById('stockModal').style.transform = 'translateY(100%)';
        }

        function loadTradingViewChart(symbol) {
            document.getElementById('tradingview_chart').innerHTML = '';
            new TradingView.widget({
                container_id: 'tradingview_chart',
                symbol: `NASDAQ:${symbol}`,
                interval: 'D',
                theme: 'light',
                style: '1',
                locale: 'en',
                width: '100%',
                height: 400,
                enable_publishing: false,
                hide_top_toolbar: true,
                hide_legend: true
            });
        }

        function buyStock() {
            alert("Proceeding to buy stock...");
        }
    </script>
</body>

</html>