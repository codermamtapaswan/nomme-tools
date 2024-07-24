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
<!DOCTYPE html>
<html>

<head>
  <title>Domain Name Generator</title>
</head>

<body>
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
            "academy", "accountant", "accountants", "actor", "adult", "agency", "airforce", "amsterdam", "apartments", "app", "archi", "army", "art", "associates", "attorney", "auction", "audio", "auto", "autos", "baby", "band", "bar", "barcelona", "bargains", "bayern", "beauty", "beer", "best", "bet", "bid", "bike", "bingo", "bio", "black", "blog", "blue", "boats", "bond", "boo", "boston", "bot", "boutique", "build", "builders", "business", "buzz", "cab", "cafe", "cam", "camera", "camp", "capital", "car", "cards", "care", "careers", "cars", "casa", "cash", "casino", "catering", "center", "ceo", "charity", "chat", "cheap", "christmas", "church", "city", "claims", "cleaning", "click", "clinic", "clothing", "cloud", "club", "coach", "codes", "coffee", "college", "community", "company", "computer", "condos", "construction", "consulting", "contact", "contractors", "cooking", "cool", "country", "coupons", "courses", "credit", "creditcard", "cricket", "cruises", "dad", "dance", "date", "dating", "day", "dealer", "deals", "degree", "delivery", "democrat", "dental", "dentist", "design", "dev", "diamonds", "diet", "digital", "direct", "directory", "discount", "doctor", "dog", "domains", "download", "earth", "eco", "education", "email", "energy", "engineer", "engineering", "enterprises", "equipment", "esq", "estate", "events", "exchange", "expert", "exposed", "express", "fail", "faith", "family", "fan", "fans", "farm", "fashion", "film", "finance", "financial", "fish", "fishing", "fit", "fitness", "flights", "florist", "flowers", "foo", "football", "forsale", "foundation", "fun", "fund", "furniture", "futbol", "fyi", "gallery", "game", "games", "garden", "gay", "gifts", "gives", "giving", "glass", "global", "gmbh", "gold", "golf", "graphics", "gratis", "green", "gripe", "group", "guide", "guitars", "guru", "hair", "haus", "health", "healthcare", "help", "hiphop", "hockey", "holdings", "holiday", "homes", "horse", "hospital", "host", "hosting", "house", "immo", "immobilien", "inc", "industries", "info", "ing", "ink", "institute", "insure", "international", "investments", "irish", "ist", "istanbul", "jetzt", "jewelry", "jobs", "kaufen", "kids", "kim", "kitchen", "kiwi", "land", "law", "lawyer", "lease", "legal", "lgbt", "life", "lighting", "limited", "limo", "link", "live", "living", "llc", "loan", "loans", "lol", "london", "love", "ltd", "ltda", "luxury", "maison", "makeup", "management", "market", "marketing", "mba", "media", "melbourne", "meme", "memorial", "men", "menu", "miami", "mobi", "moda", "moe", "mom", "money", "monster", "mortgage", "motorcycles", "mov", "movie", "nagoya", "name", "navy", "network", "news", "nexus", "ninja", "nrw", "nyc", "okinawa", "one", "onl", "online", "page", "paris", "partners", "parts", "party", "pet", "phd", "photography", "photos", "pics", "pictures", "pink", "pizza", "place", "plumbing", "plus", "poker", "porn", "press", "productions", "prof", "promo", "properties", "property", "protection", "pub", "quebec", "quest", "racing", "realestate", "recipes", "red", "rehab", "reise", "reisen", "rent", "rentals", "repair", "report", "republican", "rest", "restaurant", "review", "reviews", "rich", "rip", "rocks", "rodeo", "rsvp", "run", "ryukyu", "sale", "salon", "sarl", "school", "schule", "science", "security", "services", "sex", "shiksha", "shoes", "shop", "shopping", "show", "singles", "site", "ski", "skin", "soccer", "social", "software", "solar", "solutions", "space", "storage", "store", "stream", "studio", "study", "style", "sucks", "supplies", "supply", "support", "surf", "surgery", "sydney", "systems", "tax", "taxi", "team", "tech", "technology", "tennis", "theater", "theatre", "tickets", "tienda", "tips", "tires", "today", "tokyo", "tools", "top", "tours", "town", "toys", "trade", "training", "travel", "tube", "tv", "university", "uno", "vacations", "vegas", "ventures", "vet", "viajes", "video", "villas", "vin", "vip", "vision", "vodka", "vote", "voto", "voyage", "wales", "watch", "watches", "webcam", "website", "wedding", "wiki", "win", "wine", "work", "works", "world", "wtf", "xxx", "xyz", "yachts", "yoga", "yokohama", "zip", "zone"
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



</body>

</html>