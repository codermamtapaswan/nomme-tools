<?php

function sanitize_input($data)
{
  return trim(htmlspecialchars($data));
}

function buildName($type)
{
  // Initialize arrays for components
  $prefixes = [];
  $suffixes = [];
  $adjectives = [];
  $extensions = [];

  // Switch case for different categories
  switch ($type) {
    case 'business':
      $prefixes = ['Pro', 'Elite', 'NextGen', 'Tech', 'Solutions', 'Design', 'Studio', 'Works', 'Hub', 'Group'];
      $suffixes = ['Global', 'Innovative', 'NextGen', 'Elite', 'Prime'];
      $adjectives = ['Innovative', 'Leading', 'Professional'];
      break;
    case 'brand':
      $prefixes = ['Smart', 'Epic', 'Prime', 'Nex', 'Ultra', 'Zen', 'Pro'];
      $suffixes = ['Inc', 'LLC', 'Co', 'Group', 'Solutions', 'Tech', 'Labs', 'Ventures', 'Works', 'Hub', 'Network'];
      $adjectives = ['Creative', 'Unique', 'Bold'];
      break;
    case 'domain':
      $prefixes = ['Web', 'Net', 'Site'];
      $adjectives = ['Reliable', 'Secure', 'Fast'];
      $suffixes = [
        "academy", "accountant", "accountants", "actor", "adult", "agency", "airforce", "amsterdam", "apartments", "app", "archi", "army", "art", "associates", "attorney", "auction", "audio", "auto", "autos", "baby", "band", "bar", "barcelona", "bargains", "bayern", "beauty", "beer", "best", "bet", "bid", "bike", "bingo", "bio", "black", "blog", "blue", "boats", "bond", "boo", "boston", "bot", "boutique", "build", "builders", "Domain   ", "buzz", "cab", "cafe", "cam", "camera", "camp", "capital", "car", "cards", "care", "careers", "cars", "casa", "cash", "casino", "catering", "center", "ceo", "charity", "chat", "cheap", "christmas", "church", "city", "claims", "cleaning", "click", "clinic", "clothing", "cloud", "club", "coach", "codes", "coffee", "college", "community", "company", "computer", "condos", "construction", "consulting", "contact", "contractors", "cooking", "cool", "country", "coupons", "courses", "credit", "creditcard", "cricket", "cruises", "dad", "dance", "date", "dating", "day", "dealer", "deals", "degree", "delivery", "democrat", "dental", "dentist", "design", "dev", "diamonds", "diet", "digital", "direct", "directory", "discount", "doctor", "dog", "domains", "download", "earth", "eco", "education", "email", "energy", "engineer", "engineering", "enterprises", "equipment", "esq", "estate", "events", "exchange", "expert", "exposed", "express", "fail", "faith", "family", "fan", "fans", "farm", "fashion", "film", "finance", "financial", "fish", "fishing", "fit", "fitness", "flights", "florist", "flowers", "foo", "football", "forsale", "foundation", "fun", "fund", "furniture", "futbol", "fyi", "gallery", "game", "games", "garden", "gay", "gifts", "gives", "giving", "glass", "global", "gmbh", "gold", "golf", "graphics", "gratis", "green", "gripe", "group", "guide", "guitars", "guru", "hair", "haus", "health", "healthcare", "help", "hiphop", "hockey", "holdings", "holiday", "homes", "horse", "hospital", "host", "hosting", "house", "immo", "immobilien", "inc", "industries", "info", "ing", "ink", "institute", "insure", "international", "investments", "irish", "ist", "istanbul", "jetzt", "jewelry", "jobs", "kaufen", "kids", "kim", "kitchen", "kiwi", "land", "law", "lawyer", "lease", "legal", "lgbt", "life", "lighting", "limited", "limo", "link", "live", "living", "llc", "loan", "loans", "lol", "london", "love", "ltd", "ltda", "luxury", "maison", "makeup", "management", "market", "marketing", "mba", "media", "melbourne", "meme", "memorial", "men", "menu", "miami", "mobi", "moda", "moe", "mom", "money", "monster", "mortgage", "motorcycles", "mov", "movie", "nagoya", "name", "navy", "network", "news", "nexus", "ninja", "nrw", "nyc", "okinawa", "one", "onl", "online", "page", "paris", "partners", "parts", "party", "pet", "phd", "photography", "photos", "pics", "pictures", "pink", "pizza", "place", "plumbing", "plus", "poker", "porn", "press", "productions", "prof", "promo", "properties", "property", "protection", "pub", "quebec", "quest", "racing", "realestate", "recipes", "red", "rehab", "reise", "reisen", "rent", "rentals", "repair", "report", "republican", "rest", "restaurant", "review", "reviews", "rich", "rip", "rocks", "rodeo", "rsvp", "run", "ryukyu", "sale", "salon", "sarl", "school", "schule", "science", "security", "services", "sex", "shiksha", "shoes", "shop", "shopping", "show", "singles", "site", "ski", "skin", "soccer", "social", "software", "solar", "solutions", "space", "storage", "store", "stream", "studio", "study", "style", "sucks", "supplies", "supply", "support", "surf", "surgery", "sydney", "systems", "tax", "taxi", "team", "tech", "technology", "tennis", "theater", "theatre", "tickets", "tienda", "tips", "tires", "today", "tokyo", "tools", "top", "tours", "town", "toys", "trade", "training", "travel", "tube", "tv", "university", "uno", "vacations", "vegas", "ventures", "vet", "viajes", "video", "villas", "vin", "vip", "vision", "vodka", "vote", "voto", "voyage", "wales", "watch", "watches", "webcam", "website", "wedding", "wiki", "win", "wine", "work", "works", "world", "wtf", "xxx", "xyz", "yachts", "yoga", "yokohama", "zip", "zone"
      ];
      $extensions = [
        ".ac", ".ag", ".ai", ".am", ".asia", ".at", ".au", ".be", ".berlin", ".biz", ".bz", ".ca", ".cc", ".ch", ".cl", ".cn", ".co", ".co.in", ".co.jp", ".co.kr", ".co.nz", ".co.uk", ".co.za", ".com", ".com.ag", ".com.au", ".com.br", ".com.bz", ".com.cn", ".com.co", ".com.es", ".com.ky", ".com.mx", ".com.pe", ".com.ph", ".com.pl", ".com.ru", ".com.tw", ".cz", ".de", ".dk", ".es", ".eu", ".fm", ".fr", ".gg", ".gs", ".id", ".idv.tw", ".in", ".io", ".it", ".it.com", ".jp", ".kr", ".ky", ".la", ".lat", ".me", ".me.uk", ".ms", ".mx", ".ne.kr", ".net", ".net.ag", ".net.au", ".net.br", ".net.bz", ".net.cn", ".net.co", ".net.in", ".net.ky", ".net.nz", ".net.pe", ".net.ph", ".net.pl", ".net.ru", ".nl", ".no", ".nom.co", ".nom.es", ".nom.pe", ".nz", ".org", ".org.ag", ".org.au", ".org.cn", ".org.es", ".org.in", ".org.ky", ".org.nz", ".org.pe", ".org.ph", ".org.pl", ".org.ru", ".org.uk", ".ph", ".pl", ".pw", ".re.kr", ".se", ".sg", ".sh", ".tw", ".uk", ".us", ".vc", ".ws", ".移动", ".COM", ".NET", ".ORG", ".INFO", ".CA", ".CO", ".UK", ".CO.UK", ".BIZ", ".COM.AU"
      ];
      break;
    case 'product':
      $prefixes = ['Tech', 'Smart', 'Giga'];
      $suffixes = [
        'ProSeries', 'Control', 'ProGrade', 'SmartTech', 'Boostmax', 'Power', 'Vision',
        'Effortless', 'Intuitive', 'Miracle', 'Magic', 'X', 'Elite', 'Nexus', 'Zone',
        'Quick', 'TopRated', 'Innovative', 'Genius', 'Classic', 'Elite', 'Perfect', 'Pro',
        'Xtreme', 'Vital', 'HighSpeed', 'Style', 'Upgrade', 'Ace', 'Smart', 'Comfort',
        'Fusion', 'Revolution', 'Solutions', 'Eco', 'Superb', 'Plusplus', 'Top', 'Sonic',
        'NextLevel', 'Ease', 'Superior', 'Max', 'Prime', 'Ultimate', 'Tech', 'Reliable',
        'Easy', 'Super', 'Pro', 'Premium', 'Hybrid', 'AllInOne', 'Go', 'Extreme',
        'Powerful', 'Wonder', 'Essential', 'Optimized', 'Energy', 'Boost', 'Hq', 'Dynamic',
        'Plus', 'Advance', 'Next', 'NextGen', 'Radiant', 'Best', 'Pure', 'Unique',
        'SuperFast', 'Master', 'Vision', 'Dream', 'Health', 'Safe', 'Speed', 'Prime',
        'Edge', 'Flex', 'Eco', 'Master', 'Max', 'Sleek', 'Ultra', 'Rapid', 'Tech',
        'Fresh', 'Dom', 'Suite', 'Den', 'Roam', 'Reach', 'Cellar', 'Moth', 'Blog',
        'Venue', 'Keep', 'Route'
      ];
      $adjectives = ['Advanced', 'Smart', 'High-tech'];
      break;
    case 'podcast':
      $prefixes = ['Talk', 'Cast', 'Show'];
      $suffixes = [
        'Radio', 'Cast', 'Talk', 'Show', 'Cast', 'Talk', 'Series', 'Chronicles',        'Spreading', 'Today', 'Pioneers', 'ArtOf', 'Insights', 'Wallet', 'ScienceOf',
        'Storyof', 'Unplugged', 'MastersIn', 'Missing', 'Unveiled', 'Planet', 'Progress',
        'Matter', 'PowerOf', 'Frontier', 'Transforming', 'Mastering', 'Less', 'JourneyTo',
        'Deciphered', 'Nuggets', 'HeartOf', 'Revolution', 'FutureOf', 'EvolutionOfHustle',
        'PathTo', 'Indepth', 'Unscripted', 'Excellence', 'Method', 'Unpacking', 'PioneersIn',
        'BestIn', 'ThisWeekIn', 'Mastery', 'Adventures', 'Center', 'Thedaily', 'SchoolOf',
        'Being', 'RiseOf', 'GeniusOf', 'Hidden', 'RoadTo', 'Empowerment', 'Innovation',
        'Breakthrough', 'Perspective', 'Reality', 'Extra', 'BakingA', 'MastersOf', 'SecretsOf',
        'Decoded', 'OffClock', 'Layer', 'Silver', 'Over', 'OneLast', 'Odyssey', 'Visionaries',
        'KeysTo', 'Matters', 'Unfolded', 'Horizons', 'MindsetOf', 'Innovating', 'MyFavorite',
        'Focus', 'Daily', 'VisionOf', 'Thoughtson', 'Exploring', 'Up', 'Self', 'WorldOf',
        'Spirit', 'Radio', 'Resources', 'Talks', 'Money', 'Engine', 'Weekly'
      ];
      $adjectives = ['Interesting', 'Engaging', 'Fun'];
      break;
    case 'instagram':
      $prefixes = ['Insta', 'Gram', 'Snap'];
      $suffixes = ['Pix', 'Shot', 'Story'];
      $adjectives = ['Stylish', 'Trendy', 'Cool'];
      break;
    case 'random':
      $prefixes = ['Random', 'Lucky', 'Crazy'];
      $suffixes = ['Moment', 'Spot', 'Zone'];
      $adjectives = ['Random', 'Weird', 'Cool'];
      break;
    case 'reddit':
      $prefixes = ['Red', 'Thread', 'Topic'];
      $suffixes = ['Board', 'Forum', 'Hub'];
      $adjectives = ['Popular', 'Trending', 'Hot'];
      break;
    case 'snapchat':
      $prefixes = ['Snap', 'Chat', 'Pic'];
      $suffixes = ['Chat', 'Snap', 'Story'];
      $adjectives = ['Quick', 'Fun', 'Instant'];
      break;
    case 'tiktok':
      $prefixes = ['Tik', 'Tok', 'Beat'];
      $suffixes = ['Beat', 'Sync', 'Mix'];
      $adjectives = ['Viral', 'Catchy', 'Hip'];
      break;
    case 'username':
      $prefixes = ['User', 'Name', 'Handle'];
      $suffixes = ['Hero', 'Master', 'Guru'];
      $adjectives = ['Cool', 'Awesome', 'Epic'];
      break;
    case 'youtube':
      $prefixes = ['Tube', 'Vid', 'Stream'];
      $suffixes = ['Channel', 'Vids', 'Streams'];
      $adjectives = ['Amazing', 'Popular', 'Entertaining'];
      break;
    case 'gaming':
      $prefixes = ['Game', 'Play', 'Fun'];
      $suffixes = ['Arena', 'Zone', 'World'];
      $adjectives = ['Epic', 'Legendary', 'Exciting'];
      break;
    case 'gamertag':
      $prefixes = ['Gamer', 'Tag', 'Alias'];
      $suffixes = ['Warrior', 'Ninja', 'Knight'];
      $adjectives = ['Fierce', 'Bold', 'Brave'];
      break;
    case 'roblox':
      $prefixes = ['Blox', 'Rob', 'Build'];
      $suffixes = ['Master', 'Builder', 'King'];
      $adjectives = ['Creative', 'Imaginative', 'Crafty'];
      break;
    default:
      return 'Invalid type provided.';
  }


  $selected = [
    'prefix' => $prefixes,
    'suffix' => $suffixes,
    'adjective' => $adjectives,
    'extension' => $extensions
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

function random_username($string)
{
  // Remove any non-alphanumeric characters from the input string
  $cleanString = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($string));

  // Limit the length of the cleaned string to avoid too long usernames
  $firstPart = substr($cleanString, 0, 5);

  // Generate a random alphanumeric string
  $randomPart = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 5);

  // Combine the cleaned part with the random part
  $username = $firstPart . $randomPart;

  return ucfirst($username);
}

function iterate($array, $callback)
{
  $results = [];
  foreach ($array as $item) {
    $results[] = $callback($item);
  }
  return $results;
}


function uniqueNameSet($type, $keyword)
{
  $components = buildName($type);
  $words = generateApiWords($keyword);

  $adjectives = $components['adjective'];
  $suffixes = $components['suffix'];
  $prefixes = $components['prefix'];
  $extensions = $components['extension'];
  $similar_meaning = $words['similar_meaning'];
  $sound_like = $words['sound_like'];
  $nouns = $words['nouns'];
  $api_adjectives = $words['adjectives'];
  $triggered_by = $words['triggered_by'];
  $suggestions = $words['suggestions'];

  // Initialize an array to hold generated names
  $generatedNames = [];

  // Generate names based on the keyword and components
  switch ($type) {
    case 'domain':

      foreach ($suffixes as $suffix) {
        foreach ($extensions as $extension) {
          $generatedNames[] = strtolower($keyword . $suffix . $extension);
          $generatedNames[] = strtolower($suffix . $keyword . $extension);
        }
      }
      foreach ($similar_meaning as $word) {
        foreach ($extensions as $extension) {
          $generatedNames[] = strtolower($word . $extension);
        }
      }
      foreach ($api_adjectives as $adjective) {
        foreach ($extensions as $extension) {
          $generatedNames[] = strtolower($adjective . "-" . $keyword . $extension);
        }
      }

      break;

    case 'username':
      $generatedNames[] = ucfirst(random_username($keyword));
      break;


    default:
      $generatedNames = array_merge(
        iterate($suffixes, fn ($suffix) => ucfirst($keyword . " " . $suffix)),
        iterate($adjectives, fn ($adjective) => ucfirst($adjective . " " . $keyword)),
        iterate($prefixes, fn ($prefix) => ucfirst($prefix . " " . $keyword)),
        iterate($similar_meaning, fn ($word) => ucfirst($keyword . " " . $word)),
        iterate($sound_like, fn ($word) => ucfirst($word . " " . $keyword)),
        iterate($nouns, fn ($noun) => ucfirst($keyword . " " . $noun)),
        iterate($api_adjectives, fn ($adjective) => ucfirst($adjective . " " . $keyword)),
        iterate($triggered_by, fn ($word) => ucfirst($word . " " . $keyword)),
        iterate($suggestions, fn ($suggestion) => ucfirst($keyword . " " . $suggestion))
      );
      break;
  }

  return $generatedNames;
}
