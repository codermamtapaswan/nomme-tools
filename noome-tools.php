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
        "academy",
        "accountant",
        "accountants",
        "actor",
        "adult",
        "agency",
        "airforce",
        "amsterdam",
        "apartments",
        "app",
        "archi",
        "army",
        "art",
        "associates",
        "attorney",
        "auction",
        "audio",
        "auto",
        "autos",
        "baby",
        "band",
        "bar",
        "barcelona",
        "bargains",
        "bayern",
        "beauty",
        "beer",
        "best",
        "bet",
        "bid",
        "bike",
        "bingo",
        "bio",
        "black",
        "blog",
        "blue",
        "boats",
        "bond",
        "boo",
        "boston",
        "bot",
        "boutique",
        "build",
        "builders",
        "Domain   ",
        "buzz",
        "cab",
        "cafe",
        "cam",
        "camera",
        "camp",
        "capital",
        "car",
        "cards",
        "care",
        "careers",
        "cars",
        "casa",
        "cash",
        "casino",
        "catering",
        "center",
        "ceo",
        "charity",
        "chat",
        "cheap",
        "christmas",
        "church",
        "city",
        "claims",
        "cleaning",
        "click",
        "clinic",
        "clothing",
        "cloud",
        "club",
        "coach",
        "codes",
        "coffee",
        "college",
        "community",
        "company",
        "computer",
        "condos",
        "construction",
        "consulting",
        "contact",
        "contractors",
        "cooking",
        "cool",
        "country",
        "coupons",
        "courses",
        "credit",
        "creditcard",
        "cricket",
        "cruises",
        "dad",
        "dance",
        "date",
        "dating",
        "day",
        "dealer",
        "deals",
        "degree",
        "delivery",
        "democrat",
        "dental",
        "dentist",
        "design",
        "dev",
        "diamonds",
        "diet",
        "digital",
        "direct",
        "directory",
        "discount",
        "doctor",
        "dog",
        "domains",
        "download",
        "earth",
        "eco",
        "education",
        "email",
        "energy",
        "engineer",
        "engineering",
        "enterprises",
        "equipment",
        "esq",
        "estate",
        "events",
        "exchange",
        "expert",
        "exposed",
        "express",
        "fail",
        "faith",
        "family",
        "fan",
        "fans",
        "farm",
        "fashion",
        "film",
        "finance",
        "financial",
        "fish",
        "fishing",
        "fit",
        "fitness",
        "flights",
        "florist",
        "flowers",
        "foo",
        "football",
        "forsale",
        "foundation",
        "fun",
        "fund",
        "furniture",
        "futbol",
        "fyi",
        "gallery",
        "game",
        "games",
        "garden",
        "gay",
        "gifts",
        "gives",
        "giving",
        "glass",
        "global",
        "gmbh",
        "gold",
        "golf",
        "graphics",
        "gratis",
        "green",
        "gripe",
        "group",
        "guide",
        "guitars",
        "guru",
        "hair",
        "haus",
        "health",
        "healthcare",
        "help",
        "hiphop",
        "hockey",
        "holdings",
        "holiday",
        "homes",
        "horse",
        "hospital",
        "host",
        "hosting",
        "house",
        "immo",
        "immobilien",
        "inc",
        "industries",
        "info",
        "ing",
        "ink",
        "institute",
        "insure",
        "international",
        "investments",
        "irish",
        "ist",
        "istanbul",
        "jetzt",
        "jewelry",
        "jobs",
        "kaufen",
        "kids",
        "kim",
        "kitchen",
        "kiwi",
        "land",
        "law",
        "lawyer",
        "lease",
        "legal",
        "lgbt",
        "life",
        "lighting",
        "limited",
        "limo",
        "link",
        "live",
        "living",
        "llc",
        "loan",
        "loans",
        "lol",
        "london",
        "love",
        "ltd",
        "ltda",
        "luxury",
        "maison",
        "makeup",
        "management",
        "market",
        "marketing",
        "mba",
        "media",
        "melbourne",
        "meme",
        "memorial",
        "men",
        "menu",
        "miami",
        "mobi",
        "moda",
        "moe",
        "mom",
        "money",
        "monster",
        "mortgage",
        "motorcycles",
        "mov",
        "movie",
        "nagoya",
        "name",
        "navy",
        "network",
        "news",
        "nexus",
        "ninja",
        "nrw",
        "nyc",
        "okinawa",
        "one",
        "onl",
        "online",
        "page",
        "paris",
        "partners",
        "parts",
        "party",
        "pet",
        "phd",
        "photography",
        "photos",
        "pics",
        "pictures",
        "pink",
        "pizza",
        "place",
        "plumbing",
        "plus",
        "poker",
        "porn",
        "press",
        "productions",
        "prof",
        "promo",
        "properties",
        "property",
        "protection",
        "pub",
        "quebec",
        "quest",
        "racing",
        "realestate",
        "recipes",
        "red",
        "rehab",
        "reise",
        "reisen",
        "rent",
        "rentals",
        "repair",
        "report",
        "republican",
        "rest",
        "restaurant",
        "review",
        "reviews",
        "rich",
        "rip",
        "rocks",
        "rodeo",
        "rsvp",
        "run",
        "ryukyu",
        "sale",
        "salon",
        "sarl",
        "school",
        "schule",
        "science",
        "security",
        "services",
        "sex",
        "shiksha",
        "shoes",
        "shop",
        "shopping",
        "show",
        "singles",
        "site",
        "ski",
        "skin",
        "soccer",
        "social",
        "software",
        "solar",
        "solutions",
        "space",
        "storage",
        "store",
        "stream",
        "studio",
        "study",
        "style",
        "sucks",
        "supplies",
        "supply",
        "support",
        "surf",
        "surgery",
        "sydney",
        "systems",
        "tax",
        "taxi",
        "team",
        "tech",
        "technology",
        "tennis",
        "theater",
        "theatre",
        "tickets",
        "tienda",
        "tips",
        "tires",
        "today",
        "tokyo",
        "tools",
        "top",
        "tours",
        "town",
        "toys",
        "trade",
        "training",
        "travel",
        "tube",
        "tv",
        "university",
        "uno",
        "vacations",
        "vegas",
        "ventures",
        "vet",
        "viajes",
        "video",
        "villas",
        "vin",
        "vip",
        "vision",
        "vodka",
        "vote",
        "voto",
        "voyage",
        "wales",
        "watch",
        "watches",
        "webcam",
        "website",
        "wedding",
        "wiki",
        "win",
        "wine",
        "work",
        "works",
        "world",
        "wtf",
        "xxx",
        "xyz",
        "yachts",
        "yoga",
        "yokohama",
        "zip",
        "zone"
      ];
      $extensions = [
        ".ac",
        ".ag",
        ".ai",
        ".am",
        ".asia",
        ".at",
        ".au",
        ".be",
        ".berlin",
        ".biz",
        ".bz",
        ".ca",
        ".cc",
        ".ch",
        ".cl",
        ".cn",
        ".co",
        ".co.in",
        ".co.jp",
        ".co.kr",
        ".co.nz",
        ".co.uk",
        ".co.za",
        ".com",
        ".com.ag",
        ".com.au",
        ".com.br",
        ".com.bz",
        ".com.cn",
        ".com.co",
        ".com.es",
        ".com.ky",
        ".com.mx",
        ".com.pe",
        ".com.ph",
        ".com.pl",
        ".com.ru",
        ".com.tw",
        ".cz",
        ".de",
        ".dk",
        ".es",
        ".eu",
        ".fm",
        ".fr",
        ".gg",
        ".gs",
        ".id",
        ".idv.tw",
        ".in",
        ".io",
        ".it",
        ".it.com",
        ".jp",
        ".kr",
        ".ky",
        ".la",
        ".lat",
        ".me",
        ".me.uk",
        ".ms",
        ".mx",
        ".ne.kr",
        ".net",
        ".net.ag",
        ".net.au",
        ".net.br",
        ".net.bz",
        ".net.cn",
        ".net.co",
        ".net.in",
        ".net.ky",
        ".net.nz",
        ".net.pe",
        ".net.ph",
        ".net.pl",
        ".net.ru",
        ".nl",
        ".no",
        ".nom.co",
        ".nom.es",
        ".nom.pe",
        ".nz",
        ".org",
        ".org.ag",
        ".org.au",
        ".org.cn",
        ".org.es",
        ".org.in",
        ".org.ky",
        ".org.nz",
        ".org.pe",
        ".org.ph",
        ".org.pl",
        ".org.ru",
        ".org.uk",
        ".ph",
        ".pl",
        ".pw",
        ".re.kr",
        ".se",
        ".sg",
        ".sh",
        ".tw",
        ".uk",
        ".us",
        ".vc",
        ".ws",
        ".移动",
        ".COM",
        ".NET",
        ".ORG",
        ".INFO",
        ".CA",
        ".CO",
        ".UK",
        ".CO.UK",
        ".BIZ",
        ".COM.AU"
      ];
      break;
    case 'product':
      $prefixes = ['Tech', 'Smart', 'Giga'];
      $suffixes = [
        'ProSeries',
        'Control',
        'ProGrade',
        'SmartTech',
        'Boostmax',
        'Power',
        'Vision',
        'Effortless',
        'Intuitive',
        'Miracle',
        'Magic',
        'X',
        'Elite',
        'Nexus',
        'Zone',
        'Quick',
        'TopRated',
        'Innovative',
        'Genius',
        'Classic',
        'Elite',
        'Perfect',
        'Pro',
        'Xtreme',
        'Vital',
        'HighSpeed',
        'Style',
        'Upgrade',
        'Ace',
        'Smart',
        'Comfort',
        'Fusion',
        'Revolution',
        'Solutions',
        'Eco',
        'Superb',
        'Plusplus',
        'Top',
        'Sonic',
        'NextLevel',
        'Ease',
        'Superior',
        'Max',
        'Prime',
        'Ultimate',
        'Tech',
        'Reliable',
        'Easy',
        'Super',
        'Pro',
        'Premium',
        'Hybrid',
        'AllInOne',
        'Go',
        'Extreme',
        'Powerful',
        'Wonder',
        'Essential',
        'Optimized',
        'Energy',
        'Boost',
        'Hq',
        'Dynamic',
        'Plus',
        'Advance',
        'Next',
        'NextGen',
        'Radiant',
        'Best',
        'Pure',
        'Unique',
        'SuperFast',
        'Master',
        'Vision',
        'Dream',
        'Health',
        'Safe',
        'Speed',
        'Prime',
        'Edge',
        'Flex',
        'Eco',
        'Master',
        'Max',
        'Sleek',
        'Ultra',
        'Rapid',
        'Tech',
        'Fresh',
        'Dom',
        'Suite',
        'Den',
        'Roam',
        'Reach',
        'Cellar',
        'Moth',
        'Blog',
        'Venue',
        'Keep',
        'Route'
      ];
      $adjectives = ['Advanced', 'Smart', 'High-tech'];
      break;
    case 'podcast':
      $prefixes = ['Talk', 'Cast', 'Show'];
      $suffixes = [
        'Radio',
        'Cast',
        'Talk',
        'Show',
        'Cast',
        'Talk',
        'Series',
        'Chronicles',
        'Spreading',
        'Today',
        'Pioneers',
        'ArtOf',
        'Insights',
        'Wallet',
        'ScienceOf',
        'Storyof',
        'Unplugged',
        'MastersIn',
        'Missing',
        'Unveiled',
        'Planet',
        'Progress',
        'Matter',
        'PowerOf',
        'Frontier',
        'Transforming',
        'Mastering',
        'Less',
        'JourneyTo',
        'Deciphered',
        'Nuggets',
        'HeartOf',
        'Revolution',
        'FutureOf',
        'EvolutionOfHustle',
        'PathTo',
        'Indepth',
        'Unscripted',
        'Excellence',
        'Method',
        'Unpacking',
        'PioneersIn',
        'BestIn',
        'ThisWeekIn',
        'Mastery',
        'Adventures',
        'Center',
        'Thedaily',
        'SchoolOf',
        'Being',
        'RiseOf',
        'GeniusOf',
        'Hidden',
        'RoadTo',
        'Empowerment',
        'Innovation',
        'Breakthrough',
        'Perspective',
        'Reality',
        'Extra',
        'BakingA',
        'MastersOf',
        'SecretsOf',
        'Decoded',
        'OffClock',
        'Layer',
        'Silver',
        'Over',
        'OneLast',
        'Odyssey',
        'Visionaries',
        'KeysTo',
        'Matters',
        'Unfolded',
        'Horizons',
        'MindsetOf',
        'Innovating',
        'MyFavorite',
        'Focus',
        'Daily',
        'VisionOf',
        'Thoughtson',
        'Exploring',
        'Up',
        'Self',
        'WorldOf',
        'Spirit',
        'Radio',
        'Resources',
        'Talks',
        'Money',
        'Engine',
        'Weekly'
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
      $adjectives = [
        "adorable",
        "adventurous",
        "aggressive",
        "agreeable",
        "alert",
        "alive",
        "amused",
        "angry",
        "annoyed",
        "annoying",
        "anxious",
        "arrogant",
        "ashamed",
        "attractive",
        "average",
        "awful",
        "bad",
        "beautiful",
        "better",
        "bewildered",
        "black",
        "bloody",
        "blue",
        "blue-eyed",
        "blushing",
        "bored",
        "brainy",
        "brave",
        "breakable",
        "bright",
        "busy",
        "calm",
        "careful",
        "cautious",
        "charming",
        "cheerful",
        "clean",
        "clear",
        "clever",
        "cloudy",
        "clumsy",
        "colorful",
        "combative",
        "comfortable",
        "concerned",
        "condemned",
        "confused",
        "cooperative",
        "courageous",
        "crazy",
        "creepy",
        "crowded",
        "cruel",
        "curious",
        "cute",
        "dangerous",
        "dark",
        "dead",
        "defeated",
        "defiant",
        "delightful",
        "depressed",
        "determined",
        "different",
        "difficult",
        "disgusted",
        "distinct",
        "disturbed",
        "dizzy",
        "doubtful",
        "drab",
        "dull",
        "eager",
        "easy",
        "elated",
        "elegant",
        "embarrassed",
        "enchanting",
        "encouraging",
        "energetic",
        "enthusiastic",
        "envious",
        "evil",
        "excited",
        "expensive",
        "exuberant",
        "fair",
        "faithful",
        "famous",
        "fancy",
        "fantastic",
        "fierce",
        "filthy",
        "fine",
        "foolish",
        "fragile",
        "frail",
        "frantic",
        "friendly",
        "frightened",
        "funny",
        "gentle",
        "gifted",
        "glamorous",
        "gleaming",
        "glorious",
        "good",
        "gorgeous",
        "graceful",
        "grieving",
        "grotesque",
        "grumpy",
        "handsome",
        "happy",
        "healthy",
        "helpful",
        "helpless",
        "hilarious",
        "homeless",
        "homely",
        "horrible",
        "hungry",
        "hurt",
        "ill",
        "important",
        "impossible",
        "inexpensive",
        "innocent",
        "inquisitive",
        "itchy",
        "jealous",
        "jittery",
        "jolly",
        "joyous",
        "kind",
        "lazy",
        "light",
        "lively",
        "lonely",
        "long",
        "lovely",
        "lucky",
        "magnificent",
        "misty",
        "modern",
        "motionless",
        "muddy",
        "mushy",
        "mysterious",
        "nasty",
        "naughty",
        "nervous",
        "nice",
        "nutty",
        "obedient",
        "obnoxious",
        "odd",
        "old-fashioned",
        "open",
        "outrageous",
        "outstanding",
        "panicky",
        "perfect",
        "plain",
        "pleasant",
        "poised",
        "poor",
        "powerful",
        "precious",
        "prickly",
        "proud",
        "puzzled",
        "quaint",
        "real",
        "relieved",
        "repulsive",
        "rich",
        "scary",
        "selfish",
        "shiny",
        "shy",
        "silly",
        "sleepy",
        "smiling",
        "smoggy",
        "sore",
        "sparkling",
        "splendid",
        "spotless",
        "stormy",
        "strange",
        "stupid",
        "successful",
        "super",
        "talented",
        "tame",
        "tender",
        "tense",
        "terrible",
        "testy",
        "thankful",
        "thoughtful",
        "thoughtless",
        "tired",
        "tough",
        "troubled",
        "ugliest",
        "ugly",
        "uninterested",
        "unsightly",
        "unusual",
        "upset",
        "uptight",
        "vast",
        "victorious",
        "vivacious",
        "wandering",
        "weary",
        "wicked",
        "wide-eyed",
        "wild",
        "witty",
        "worrisome",
        "worried",
        "wrong",
        "xenophobic",
        "xanthous",
        "xerothermic",
        "yawning",
        "yellowed",
        "yucky",
        "zany",
        "zealous"
      ];;
      break;
    case 'youtube':
      $prefixes = ['Tube', 'Vid', 'Stream', 'The', 'ExploreWith', 'Unique', 'Creative', 'Trendy'];
      $suffixes = ['Channel', 'Vids', 'Streams', 'Vibes', 'Quest', 'Show', 'Mania', 'InMotion', 'Magic', 'Unplugged', 'Chronicles', 'Diaries', 'Journey', 'Sphere'];
      $adjectives = ['Amazing', 'Popular', 'Entertaining'];
      break;
    case 'gaming':
      $prefixes = ['Game', 'Play', 'Fun', 'Shadow', 'TheReal', 'Cosmic', 'Mystic', 'Cyber', 'Super', 'Shadow', 'Epic', 'Dark', 'Ultimate', 'Mystic', 'Vengeful', 'Cosmic'];
      $suffixes = ['Arena', 'Zone', 'World', 'Warrior', 'GamingQueen', 'NinjaX', 'Fury', 'PlaysGames', 'Phoenix', 'GamerGirl', 'Thunder', 'TheConqueror', 'TheWarrior', 'TheLegend', 'Echo', 'Rider', 'Knight', 'GalacticHero', 'RogueNinja', 'Stormbringer', 'FuryBlaze'];
      $adjectives = ['Epic', 'Legendary', 'Exciting'];
      break;
    case 'gamertag':
      $prefixes = ['Gamer', 'Tag', 'Alias', 'Elite', 'Shadow', 'Legend', 'Xtreme', 'Phantom'];
      $suffixes = ['Warrior', 'Ninja', 'Knight', 'Sage', 'Viper', 'Hunter', 'Dragon', 'Champion'];
      $adjectives = ['Fierce', 'Bold', 'Brave', 'Savage', 'Stealthy', 'Dominant', 'Invincible', 'Relentless'];
      break;
    case 'roblox':
      $prefixes = ['Blox', 'Rob', 'Build', 'Pixel', 'Robo', 'Mega', 'Craft', 'Voxel'];
      $suffixes = ['Master', 'Builder', 'King', 'Lord', 'Hero', 'Champion', 'Guru', 'Mastermind'];
      $adjectives = ['Creative', 'Imaginative', 'Crafty', 'Epic', 'Inventive', 'Legendary', 'Dynamic', 'Versatile'];
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

  return $selected;
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


// function random_username($string)
// {
//   // Remove any non-alphanumeric characters from the input string
//   $cleanString = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($string));

//   // Limit the length of the cleaned string to avoid too long usernames
//   $firstPart = substr($cleanString, 0, 5);

//   // Generate a random alphanumeric string
//   $randomPart = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 5);

//   // Combine the cleaned part with the random part
//   $username = $firstPart . $randomPart;

//   return $username;
// }

function random_username_generator($keyword, $platform)
{
  $url = "https://api.randomgenerate.io/stream/ai";
  $params = array(
    "user_prompt" => $keyword,
    "platform" => $platform,
    "allow_special_char" => "true"
  );

  $query = http_build_query($params);
  $finalUrl = $url . "?" . $query;

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $finalUrl);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec($ch);
  if ($response === false) {
    return ["Error" => curl_error($ch)];
  } else {
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode == 200) {
      $lines = explode("\n", $response);
      $usernames = [];

      foreach ($lines as $line) {
        if (strpos($line, "data: ") === 0) {
          $jsonData = substr($line, 6);
          $data = json_decode($jsonData, true);
          if ($data !== null && isset($data['content'])) {
            $usernames[] = $data['content'];
          }
        }
      }

      return $usernames;
    } else {
      return ["Error" => "HTTP status code " . $httpCode];
    }
  }
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
    case 'podcast':
      $generatedNames = array_merge(
        iterate($similar_meaning, fn ($word) => ucfirst($word)),
        iterate($api_adjectives, fn ($adjective) => ucfirst($adjective . " " . $keyword)),
        iterate($suffixes, fn ($suffix) => ucfirst($keyword . " " . $suffix)),
        iterate($adjectives, fn ($adjective) => ucfirst($adjective . " " . $keyword)),
        iterate($prefixes, fn ($prefix) => ucfirst($prefix . " " . $keyword))
      );
      break;

    case 'domain':
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
      foreach ($suffixes as $suffix) {
        foreach ($extensions as $extension) {
          $generatedNames[] = strtolower($keyword . $suffix . $extension);
          $generatedNames[] = strtolower($suffix . $keyword . $extension);
        }
      }
      break;


    case 'instagram':
    case 'random':
    case 'reddit':
    case 'snapchat':
    case 'tiktok':
    case 'username':
    case 'youtube':
    case 'gaming':
    case 'gamertag':
    case 'roblox':
      $generatedNames = array_merge($generatedNames, random_username_generator($keyword, $type));
      break;

    default:
      $generatedNames = array_merge(
        iterate($similar_meaning, fn ($word) => ucfirst($keyword . " " . $word)),
        iterate($api_adjectives, fn ($adjective) => ucfirst($adjective . " " . $keyword)),
        iterate($suffixes, fn ($suffix) => ucfirst($keyword . " " . $suffix)),
        iterate($adjectives, fn ($adjective) => ucfirst($adjective . " " . $keyword)),
        iterate($prefixes, fn ($prefix) => ucfirst($prefix . " " . $keyword)),
        iterate($sound_like, fn ($word) => ucfirst($word . " " . $keyword)),
        iterate($nouns, fn ($noun) => ucfirst($keyword . " " . $noun)),
        iterate($triggered_by, fn ($word) => ucfirst($word . " " . $keyword)),
        iterate($suggestions, fn ($suggestion) => ucfirst($keyword . " " . $suggestion))
      );
  }

  return $generatedNames;
}




//  https://usernamegenerator.io/snapchat-username-ideas


//  https://api.randomgenerate.io/stream/business_names/ai?industry=Technology&character_limit=20&style=Brandable%20names%20-%20Zendesk,%20Spotify&keywords=getassist&competitors=competitor1,competitor2&prefix=tech-&suffix=-fy&count=30

// https://api.randomgenerate.io/stream/ai?user_prompt=$name&count=15&platform=instagram&allow_special_char=true&important_keyword=freedom&gender=female&style=Aesthetic,Professional&lucky_number=1&prefix=sassy&suffix=nova&min_length=1&max_length=30 -->

// // Print the generated names
