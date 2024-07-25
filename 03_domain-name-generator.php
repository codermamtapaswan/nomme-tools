<?php

require_once "noome-tools.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input
    $keywords = htmlspecialchars($_POST['keywords']);
    $limit = filter_var($_POST['number'], FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 50]]);

    // Validate inputs
    if ($keyword && $limit !== false) {
        $components = buildName('Domain ');
        $adjectives = $components['adjective'];
        $suffix = $components['suffix'];
        $prefixes = $components['prefix'];

        // Initialize an array to hold generated names
        $generatedNames = [];

        // Generate names based on the keyword and components
        $generatedNames[] = strtolower(str_replace(' ', '', $keyword . $suffix));
        $generatedNames[] = strtolower(str_replace(' ', '', $adjectives . $keyword));
        $generatedNames[] = strtolower(str_replace(' ', '', $prefixes . $keyword));


        // Limit the number of generated names to the specified limit
        $generatedNames = array_slice($generatedNames, 0, $limit);

        // Store the generated names for displaying in HTML
        $generatedNames = array_map('htmlspecialchars', $generatedNames);
    } else {
        $message =  "Please enter a valid keyword and number between 1 and 50.";
    }
}
?>



<?php include "header.php"; ?>

<div class="container mt-5">
    <div class="all-page">

        <!-- tools container  Start-->
        <div class="noome-tool-box">
            <div class="tag">Domain Name</div>
            <div class="nomme-tool-title">
                <h1>Domain Name Generator</h1>
                <p>Get a unique and memorable name that will make your Domain stand out from the competition.</p>
            </div>

            <form method="post">
                <div class="tooltip">
                    <input type="text" name="keyword" class="keyword" placeholder="Enter Keywords" required>
                    <span class="tooltiptext">Tip: Add additional keywords using comma, tab, space, or enter. Only letters and numbers can be used.</span>
                </div>
                <div class="tooltip">
                    <input type="number" name="number" placeholder="Count" min="1" max="100" required>
                    <span class="tooltiptext">Tip: How many number of name want to generate .</span>
                </div>

                <button class="way-btn">
                    <span> Generate</span>

                    <svg viewBox="0 0 20 20" fill="#fff" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                        <g stroke-width="0" />
                        <g stroke-linecap="round" stroke-linejoin="round" />
                        <path d="m8.75 3.75.625-1.25 1.25-.625-1.25-.625L8.75 0l-.625 1.25-1.25.625 1.25.625zm-5.625 2.5 1.041-2.083L6.25 3.125 4.166 2.083 3.125 0 2.084 2.083 0 3.125l2.084 1.042zm13.75 5-1.041 2.083-2.084 1.042 2.084 1.042 1.041 2.083 1.041-2.083L20 14.375l-2.084-1.042zm2.759-7.569L16.319.366a1.246 1.246 0 0 0-1.767 0L.366 14.552a1.25 1.25 0 0 0 0 1.768l3.314 3.314c.244.244.564.366.884.366s.64-.122.884-.366L19.633 5.448a1.25 1.25 0 0 0 0-1.767m-5.592 4.267-1.989-1.989 3.383-3.383 1.989 1.989z" />
                    </svg>
                </button>

            </form>



        </div>

        <div class="row row-gap generated-result">

            <?php if (isset($generatedNames)) : foreach ($generatedNames as $name) : ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="result">
                            <?php echo $name; ?>
                        </div>
                    </div>
                <?php endforeach;
            else : if (isset($message)) { ?>
                    <div class="col-lg-12">
                        <div class="result">
                            <?php echo $message; ?>
                        </div>
                    </div>
            <?php  }
            endif; ?>
        </div>
        <!-- tool container End  -->


    </div>
</div>

<?php include "footer.php"; ?>

















<!-- <body>
    <h1>Domain Name Generator</h1>
    <form method="post" action="">
        <label for="keywords">Enter Keywords:</label>
        <input type="text" name="keywords" id="keywords" required>
        <label for="number">Number of Names to Generate:</label>
        <input type="number" id="number" name="number" min="1" max="100" required>
        <input type="submit" value="Generate Names">
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['keywords']) && !empty($_POST['keywords'])) {
            $keywords = htmlspecialchars($_POST['keywords']);
            $limit = (int)$_POST['number'];

            $extensions = [
                ".ac", ".ag", ".ai", ".am", ".asia", ".at", ".au", ".be", ".berlin", ".biz", ".bz", ".ca", ".cc", ".ch", ".cl", ".cn", ".co", ".co.in", ".co.jp", ".co.kr", ".co.nz", ".co.uk", ".co.za", ".com", ".com.ag", ".com.au", ".com.br", ".com.bz", ".com.cn", ".com.co", ".com.es", ".com.ky", ".com.mx", ".com.pe", ".com.ph", ".com.pl", ".com.ru", ".com.tw", ".cz", ".de", ".dk", ".es", ".eu", ".fm", ".fr", ".gg", ".gs", ".id", ".idv.tw", ".in", ".io", ".it", ".it.com", ".jp", ".kr", ".ky", ".la", ".lat", ".me", ".me.uk", ".ms", ".mx", ".ne.kr", ".net", ".net.ag", ".net.au", ".net.br", ".net.bz", ".net.cn", ".net.co", ".net.in", ".net.ky", ".net.nz", ".net.pe", ".net.ph", ".net.pl", ".net.ru", ".nl", ".no", ".nom.co", ".nom.es", ".nom.pe", ".nz", ".org", ".org.ag", ".org.au", ".org.cn", ".org.es", ".org.in", ".org.ky", ".org.nz", ".org.pe", ".org.ph", ".org.pl", ".org.ru", ".org.uk", ".ph", ".pl", ".pw", ".re.kr", ".se", ".sg", ".sh", ".tw", ".uk", ".us", ".vc", ".ws", ".移动", ".COM", ".NET", ".ORG", ".INFO", ".CA", ".CO", ".UK", ".CO.UK", ".BIZ", ".COM.AU"
            ];

            $suffixes = [
                "academy", "accountant", "accountants", "actor", "adult", "agency", "airforce", "amsterdam", "apartments", "app", "archi", "army", "art", "associates", "attorney", "auction", "audio", "auto", "autos", "baby", "band", "bar", "barcelona", "bargains", "bayern", "beauty", "beer", "best", "bet", "bid", "bike", "bingo", "bio", "black", "blog", "blue", "boats", "bond", "boo", "boston", "bot", "boutique", "build", "builders", "Domain   ", "buzz", "cab", "cafe", "cam", "camera", "camp", "capital", "car", "cards", "care", "careers", "cars", "casa", "cash", "casino", "catering", "center", "ceo", "charity", "chat", "cheap", "christmas", "church", "city", "claims", "cleaning", "click", "clinic", "clothing", "cloud", "club", "coach", "codes", "coffee", "college", "community", "company", "computer", "condos", "construction", "consulting", "contact", "contractors", "cooking", "cool", "country", "coupons", "courses", "credit", "creditcard", "cricket", "cruises", "dad", "dance", "date", "dating", "day", "dealer", "deals", "degree", "delivery", "democrat", "dental", "dentist", "design", "dev", "diamonds", "diet", "digital", "direct", "directory", "discount", "doctor", "dog", "domains", "download", "earth", "eco", "education", "email", "energy", "engineer", "engineering", "enterprises", "equipment", "esq", "estate", "events", "exchange", "expert", "exposed", "express", "fail", "faith", "family", "fan", "fans", "farm", "fashion", "film", "finance", "financial", "fish", "fishing", "fit", "fitness", "flights", "florist", "flowers", "foo", "football", "forsale", "foundation", "fun", "fund", "furniture", "futbol", "fyi", "gallery", "game", "games", "garden", "gay", "gifts", "gives", "giving", "glass", "global", "gmbh", "gold", "golf", "graphics", "gratis", "green", "gripe", "group", "guide", "guitars", "guru", "hair", "haus", "health", "healthcare", "help", "hiphop", "hockey", "holdings", "holiday", "homes", "horse", "hospital", "host", "hosting", "house", "immo", "immobilien", "inc", "industries", "info", "ing", "ink", "institute", "insure", "international", "investments", "irish", "ist", "istanbul", "jetzt", "jewelry", "jobs", "kaufen", "kids", "kim", "kitchen", "kiwi", "land", "law", "lawyer", "lease", "legal", "lgbt", "life", "lighting", "limited", "limo", "link", "live", "living", "llc", "loan", "loans", "lol", "london", "love", "ltd", "ltda", "luxury", "maison", "makeup", "management", "market", "marketing", "mba", "media", "melbourne", "meme", "memorial", "men", "menu", "miami", "mobi", "moda", "moe", "mom", "money", "monster", "mortgage", "motorcycles", "mov", "movie", "nagoya", "name", "navy", "network", "news", "nexus", "ninja", "nrw", "nyc", "okinawa", "one", "onl", "online", "page", "paris", "partners", "parts", "party", "pet", "phd", "photography", "photos", "pics", "pictures", "pink", "pizza", "place", "plumbing", "plus", "poker", "porn", "press", "productions", "prof", "promo", "properties", "property", "protection", "pub", "quebec", "quest", "racing", "realestate", "recipes", "red", "rehab", "reise", "reisen", "rent", "rentals", "repair", "report", "republican", "rest", "restaurant", "review", "reviews", "rich", "rip", "rocks", "rodeo", "rsvp", "run", "ryukyu", "sale", "salon", "sarl", "school", "schule", "science", "security", "services", "sex", "shiksha", "shoes", "shop", "shopping", "show", "singles", "site", "ski", "skin", "soccer", "social", "software", "solar", "solutions", "space", "storage", "store", "stream", "studio", "study", "style", "sucks", "supplies", "supply", "support", "surf", "surgery", "sydney", "systems", "tax", "taxi", "team", "tech", "technology", "tennis", "theater", "theatre", "tickets", "tienda", "tips", "tires", "today", "tokyo", "tools", "top", "tours", "town", "toys", "trade", "training", "travel", "tube", "tv", "university", "uno", "vacations", "vegas", "ventures", "vet", "viajes", "video", "villas", "vin", "vip", "vision", "vodka", "vote", "voto", "voyage", "wales", "watch", "watches", "webcam", "website", "wedding", "wiki", "win", "wine", "work", "works", "world", "wtf", "xxx", "xyz", "yachts", "yoga", "yokohama", "zip", "zone"
            ];

            $names = [];

            // Fetch synonyms using Datamuse API
            function getSynonyms($word)
            {
                $url = "https://api.datamuse.com/words?ml=" . urlencode($word);
                $response = @file_get_contents($url);
                if ($response === FALSE) {
                    return [];
                }
                $data = json_decode($response, true);
                $synonyms = [];
                if (is_array($data)) {
                    foreach ($data as $item) {
                        $synonyms[] = $item['word'];
                    }
                }
                return $synonyms;
            }

            // Generate creative names
            $synonyms = getSynonyms($keywords);
            foreach ($synonyms as $syn) {
                foreach ($extensions as $extension) {
                    $names[] = strtolower(str_replace(' ', '', $syn) . $extension);
                }
            }

            foreach ($suffixes as $suffix) {
                foreach ($extensions as $extension) {
                    $names[] = strtolower(str_replace(' ', '', $keywords . $suffix . $extension));
                    $names[] = strtolower(str_replace(' ', '', $suffix . $keywords . $extension));
                }
            }

            // Remove duplicates
            $names = array_unique($names);
            $names = array_slice($names, 0, $limit);

            echo "<h2>Generated Domain Names:</h2><ul>";
            foreach ($names as $name) {
                echo "<li>" . htmlspecialchars($name) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "Please provide a keyword.";
        }
    }
    ?>



</body> -->

<!-- 
https://www.shopify.com/tools/domain-name-generator
https://www.godaddy.com/en-in/domains/domain-name-generator
https://github.com/oldravian/ai-domain-generator
https://github.com/emfhal/phpWhois-Domain-Generator
https://github.com/phpsquad/domain-maker
https://kodesmart.com/kode/php-name-generator/
https://github.com/wordnik/wordnik-php
https://dailyblogtips.com/200-prefixes-and-suffixes-for-domain-names/
-->