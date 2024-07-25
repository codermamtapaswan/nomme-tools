<?php


function buildName($type)
{
  // Initialize arrays for components
  $prefixes = [];
  $suffixes = [];
  $adjectives = [];

  // Switch case for different categories
  switch ($type) {
    case 'Business':
      $prefixes = ['Pro', 'Elite', 'NextGen', 'Tech', 'Solutions', 'Design', 'Studio', 'Works', 'Hub', 'Group'];
      $suffixes = ['Global', 'Innovative', 'NextGen', 'Elite', 'Prime'];
      $adjectives = ['Innovative', 'Leading', 'Professional'];
      break;
    case 'Brand':
      $prefixes = ['Super', 'Hyper', 'Ultra'];
      $suffixes = ['Works', 'Crafts', 'Creations'];
      $adjectives = ['Creative', 'Unique', 'Bold'];
      break;
    case 'Domain':
      $prefixes = ['Web', 'Net', 'Site'];
      $adjectives = ['Reliable', 'Secure', 'Fast'];
      $suffixes = [
        "academy", "accountant", "accountants", "actor", "adult", "agency", "airforce", "amsterdam", "apartments", "app", "archi", "army", "art", "associates", "attorney", "auction", "audio", "auto", "autos", "baby", "band", "bar", "barcelona", "bargains", "bayern", "beauty", "beer", "best", "bet", "bid", "bike", "bingo", "bio", "black", "blog", "blue", "boats", "bond", "boo", "boston", "bot", "boutique", "build", "builders", "Domain   ", "buzz", "cab", "cafe", "cam", "camera", "camp", "capital", "car", "cards", "care", "careers", "cars", "casa", "cash", "casino", "catering", "center", "ceo", "charity", "chat", "cheap", "christmas", "church", "city", "claims", "cleaning", "click", "clinic", "clothing", "cloud", "club", "coach", "codes", "coffee", "college", "community", "company", "computer", "condos", "construction", "consulting", "contact", "contractors", "cooking", "cool", "country", "coupons", "courses", "credit", "creditcard", "cricket", "cruises", "dad", "dance", "date", "dating", "day", "dealer", "deals", "degree", "delivery", "democrat", "dental", "dentist", "design", "dev", "diamonds", "diet", "digital", "direct", "directory", "discount", "doctor", "dog", "domains", "download", "earth", "eco", "education", "email", "energy", "engineer", "engineering", "enterprises", "equipment", "esq", "estate", "events", "exchange", "expert", "exposed", "express", "fail", "faith", "family", "fan", "fans", "farm", "fashion", "film", "finance", "financial", "fish", "fishing", "fit", "fitness", "flights", "florist", "flowers", "foo", "football", "forsale", "foundation", "fun", "fund", "furniture", "futbol", "fyi", "gallery", "game", "games", "garden", "gay", "gifts", "gives", "giving", "glass", "global", "gmbh", "gold", "golf", "graphics", "gratis", "green", "gripe", "group", "guide", "guitars", "guru", "hair", "haus", "health", "healthcare", "help", "hiphop", "hockey", "holdings", "holiday", "homes", "horse", "hospital", "host", "hosting", "house", "immo", "immobilien", "inc", "industries", "info", "ing", "ink", "institute", "insure", "international", "investments", "irish", "ist", "istanbul", "jetzt", "jewelry", "jobs", "kaufen", "kids", "kim", "kitchen", "kiwi", "land", "law", "lawyer", "lease", "legal", "lgbt", "life", "lighting", "limited", "limo", "link", "live", "living", "llc", "loan", "loans", "lol", "london", "love", "ltd", "ltda", "luxury", "maison", "makeup", "management", "market", "marketing", "mba", "media", "melbourne", "meme", "memorial", "men", "menu", "miami", "mobi", "moda", "moe", "mom", "money", "monster", "mortgage", "motorcycles", "mov", "movie", "nagoya", "name", "navy", "network", "news", "nexus", "ninja", "nrw", "nyc", "okinawa", "one", "onl", "online", "page", "paris", "partners", "parts", "party", "pet", "phd", "photography", "photos", "pics", "pictures", "pink", "pizza", "place", "plumbing", "plus", "poker", "porn", "press", "productions", "prof", "promo", "properties", "property", "protection", "pub", "quebec", "quest", "racing", "realestate", "recipes", "red", "rehab", "reise", "reisen", "rent", "rentals", "repair", "report", "republican", "rest", "restaurant", "review", "reviews", "rich", "rip", "rocks", "rodeo", "rsvp", "run", "ryukyu", "sale", "salon", "sarl", "school", "schule", "science", "security", "services", "sex", "shiksha", "shoes", "shop", "shopping", "show", "singles", "site", "ski", "skin", "soccer", "social", "software", "solar", "solutions", "space", "storage", "store", "stream", "studio", "study", "style", "sucks", "supplies", "supply", "support", "surf", "surgery", "sydney", "systems", "tax", "taxi", "team", "tech", "technology", "tennis", "theater", "theatre", "tickets", "tienda", "tips", "tires", "today", "tokyo", "tools", "top", "tours", "town", "toys", "trade", "training", "travel", "tube", "tv", "university", "uno", "vacations", "vegas", "ventures", "vet", "viajes", "video", "villas", "vin", "vip", "vision", "vodka", "vote", "voto", "voyage", "wales", "watch", "watches", "webcam", "website", "wedding", "wiki", "win", "wine", "work", "works", "world", "wtf", "xxx", "xyz", "yachts", "yoga", "yokohama", "zip", "zone"
      ];
      break;
    case 'Product':
      $prefixes = ['Tech', 'Smart', 'Giga'];
      $suffixes = ['Device', 'Gadget', 'Gear'];
      $adjectives = ['Advanced', 'Smart', 'High-tech'];
      break;
    case 'Podcast':
      $prefixes = ['Talk', 'Cast', 'Show'];
      $suffixes = ['Radio', 'Cast', 'Talk'];
      $adjectives = ['Interesting', 'Engaging', 'Fun'];
      break;
    case 'Instagram':
      $prefixes = ['Insta', 'Gram', 'Snap'];
      $suffixes = ['Pix', 'Shot', 'Story'];
      $adjectives = ['Stylish', 'Trendy', 'Cool'];
      break;
    case 'Random':
      $prefixes = ['Random', 'Lucky', 'Crazy'];
      $suffixes = ['Moment', 'Spot', 'Zone'];
      $adjectives = ['Random', 'Weird', 'Cool'];
      break;
    case 'Reddit':
      $prefixes = ['Red', 'Thread', 'Topic'];
      $suffixes = ['Board', 'Forum', 'Hub'];
      $adjectives = ['Popular', 'Trending', 'Hot'];
      break;
    case 'Snapchat':
      $prefixes = ['Snap', 'Chat', 'Pic'];
      $suffixes = ['Chat', 'Snap', 'Story'];
      $adjectives = ['Quick', 'Fun', 'Instant'];
      break;
    case 'TikTok':
      $prefixes = ['Tik', 'Tok', 'Beat'];
      $suffixes = ['Beat', 'Sync', 'Mix'];
      $adjectives = ['Viral', 'Catchy', 'Hip'];
      break;
    case 'Username':
      $prefixes = ['User', 'Name', 'Handle'];
      $suffixes = ['Hero', 'Master', 'Guru'];
      $adjectives = ['Cool', 'Awesome', 'Epic'];
      break;
    case 'YouTube':
      $prefixes = ['Tube', 'Vid', 'Stream'];
      $suffixes = ['Channel', 'Vids', 'Streams'];
      $adjectives = ['Amazing', 'Popular', 'Entertaining'];
      break;
    case 'Gaming':
      $prefixes = ['Game', 'Play', 'Fun'];
      $suffixes = ['Arena', 'Zone', 'World'];
      $adjectives = ['Epic', 'Legendary', 'Exciting'];
      break;
    case 'Gamertag':
      $prefixes = ['Gamer', 'Tag', 'Alias'];
      $suffixes = ['Warrior', 'Ninja', 'Knight'];
      $adjectives = ['Fierce', 'Bold', 'Brave'];
      break;
    case 'Roblox':
      $prefixes = ['Blox', 'Rob', 'Build'];
      $suffixes = ['Master', 'Builder', 'King'];
      $adjectives = ['Creative', 'Imaginative', 'Crafty'];
      break;
    default:
      return 'Invalid type provided.';
  }


  $selected = [
    'prefix' => $prefixes[array_rand($prefixes)],
    'suffix' => $suffixes[array_rand($suffixes)],
    'adjective' => $adjectives[array_rand($adjectives)],
  ];

  return  $selected;
}


function fetchWordsFromApi($url)
{
  $response = file_get_contents($url);
  if ($response === FALSE) {
    return [];
  }
  $data = json_decode($response, true);
  return array_column($data, 'word');
}

function generateApiWords($word)
{
  $base_url = "https://api.datamuse.com";
  $urls = [
    'similar_meaning' => $base_url . "/words?ml=" . urlencode($word),
    'sound_like' => $base_url . "/words?sl=" . urlencode($word),
    'adjectives' => $base_url . "/words?rel_jjb=" . urlencode($word),
    'nouns' => $base_url . "/words?rel_jja=" . urlencode($word),
    'triggered_by' => $base_url . "/words?rel_trg=" . urlencode($word),
    'suggestions' => $base_url . "/sug?s=" . urlencode($word)
  ];

  $words = [];
  foreach ($urls as $label => $url) {
    $words[$label] = fetchWordsFromApi($url);
  }
  return $words;
}



// $name = buildName('Business');

// print_r($name);

// $similar_meaning = $words['similar_meaning'];
// $sound_like = $words['sound_like'];
// $nouns = $words['nouns'];
// $adjectives = $words['adjectives'];
// $triggered_by = $words['triggered_by'];
// $suggestions = $words['suggestions'];






  // // Randomly select elements from the arrays
  // $selected = [
  //   'prefix' => $prefixes[array_rand($prefixes)],
  //   'suffix' => $suffixes[array_rand($suffixes)],
  //   'adjective' => $adjectives[array_rand($adjectives)],
  // ];

// $keyword = "travel";
// $apiWords = generateApiWords('travel');
// $words = $apiWords['similar_meaning'];
// foreach ($words as $word) {
//   $newword = $word . "" . $word;
//   echo "<ul> <li>" . $newword . "</li></ul>";
// }
