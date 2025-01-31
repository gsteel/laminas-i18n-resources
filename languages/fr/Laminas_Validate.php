<?php

/**
 * FR-Revision: 19.May.2017
 */
return [
    // Laminas\Authentication\Validator\Authentication
    "Invalid identity" => "Identité invalide",
    "Identity is ambiguous" => "l'identité est ambiguë",
    "Invalid password" => "Mot de passe invalide",
    "Authentication failed" => "L'authentification a échoué",

    // Laminas\I18n\Validator\Alnum
    "Invalid type given. String, integer or float expected" => "Type invalide. Chaîne, entier ou flottant attendu",
    "The input contains characters which are non alphabetic and no digits" => "L'entrée contient des caractères non alphabétiques et non numériques",
    "The input is an empty string" => "L'entrée est une chaîne vide",

    // Laminas\I18n\Validator\Alpha
    "Invalid type given. String expected" => "Type invalide. Chaîne attendue",
    "The input contains non alphabetic characters" => "L'entrée contient des caractères non alphabétiques",
    "The input is an empty string" => "L'entrée est une chaîne vide",

    // Laminas\I18n\Validator\DateTime
    "Invalid type given. String expected" => "Type invalide. Chaîne attendue",
    "The input does not appear to be a valid datetime" => "L'entrée ne semble pas être une date/heure valide",

    // Laminas\I18n\Validator\IsFloat
    "Invalid type given. String, integer or float expected" => "Type invalide. Chaîne, entier ou flottant attendu",
    "The input does not appear to be a float" => "L'entrée n'est pas un nombre flottant",

    // Laminas\I18n\Validator\IsInt
    "Invalid type given. String or integer expected" => "Type invalide. Chaîne ou entier attendu",
    "The input does not appear to be an integer" => "L'entrée n'est pas un entier",

    // Laminas\I18n\Validator\PhoneNumber
    "The input does not match a phone number format" => "L'entrée ne correspond pas à la structure attendue d'un numéro de téléphone",
    "The country provided is currently unsupported" => "Le pays fourni n'est pour le moment pas supporté",
    "Invalid type given. String expected" => "Type invalide. Chaîne attendue",

    // Laminas\I18n\Validator\PostCode
    "Invalid type given. String or integer expected" => "Type invalide. Chaîne ou entier attendu",
    "The input does not appear to be a postal code" => "L'entrée ne semble pas être un code postal valide",
    "An exception has been raised while validating the input" => "Une exception a été levée lors de la validation de l'entrée",

    // Laminas\Validator\Barcode
    "The input failed checksum validation" => "L'entrée n'a pas passé la validation de la somme de contrôle",
    "The input contains invalid characters" => "L'entrée contient des caractères invalides",
    "The input should have a length of %length% characters" => "L'entrée devrait contenir %length% caractères",
    "Invalid type given. String expected" => "Type invalide. Chaîne attendue",

    // Laminas\Validator\Between
    "The input is not between '%min%' and '%max%', inclusively" => "L'entrée n'est pas comprise entre '%min%' et '%max%', inclusivement",
    "The input is not strictly between '%min%' and '%max%'" => "L'entrée n'est pas strictement comprise entre '%min%' et '%max%'",

    // Laminas\Validator\Bitwise
    "The input has no common bit set with '%control%'" => "L'entrée n'a aucun bit en commun avec '%control%'",
    "The input doesn't have the same bits set as '%control%'" => "L'entrée n'a pas les mêmes bits que '%control%'",
    "The input has common bit set with '%control%'" => "L'entrée a des bits en commun avec '%control%'",

    // Laminas\Validator\Callback
    "The input is not valid" => "L'entrée n'est pas valide",
    "An exception has been raised within the callback" => "Une exception a été levée dans la fonction de rappel",

    // Laminas\Validator\CreditCard
    "The input seems to contain an invalid checksum" => "L'entrée semble contenir une somme de contrôle invalide",
    "The input must contain only digits" => "L'entrée ne doit contenir que des chiffres",
    "Invalid type given. String expected" => "Type invalide. Chaîne attendue",
    "The input contains an invalid amount of digits" => "L'entrée contient un nombre invalide de chiffres",
    "The input is not from an allowed institute" => "L'entrée ne provient pas d'une institution autorisée",
    "The input seems to be an invalid credit card number" => "L'entrée semble être un numéro de carte bancaire invalide",
    "An exception has been raised while validating the input" => "Une exception a été levée lors de la validation de l'entrée",

    // Laminas\Validator\Csrf
    "The form submitted did not originate from the expected site" => "Le formulaire ne provient pas du site attendu",

    // Laminas\Validator\Date
    "Invalid type given. String, integer, array or DateTime expected" => "Type invalide. Chaîne, entier, tableau ou DateTime attendu",
    "The input does not appear to be a valid date" => "L'entrée ne semble pas être une date valide",
    "The input does not fit the date format '%format%'" => "L'entrée ne correspond pas au format '%format%'",

    // Laminas\Validator\DateStep
    "Invalid type given. String, integer, array or DateTime expected" => "Entrée invalide. Chaîne, entier, tableau ou DateTime attendu",
    "The input does not appear to be a valid date" => "L'entrée ne semble pas être une date valide",
    "The input does not fit the date format '%format%'" => "L'entrée ne correspond pas au format de date '%format%'",
    "The input is not a valid step" => "L'entrée n'est pas un pas de date valide",

    // Laminas\Validator\Db\AbstractDb
    "No record matching the input was found" => "Aucun enregistrement trouvé",
    "A record matching the input was found" => "Un enregistrement a été trouvé",

    // Laminas\Validator\Digits
    "The input must contain only digits" => "L'entrée ne doit contenir que des chiffres",
    "The input is an empty string" => "L'entrée est une chaîne vide",
    "Invalid type given. String, integer or float expected" => "Type invalide. Chaîne, entier ou flottant attendu",

    // Laminas\Validator\EmailAddress
    "Invalid type given. String expected" => "Type invalide. Chaîne attendue",
    "The input is not a valid email address. Use the basic format local-part@hostname" => "L'entrée n'est pas une adresse email valide. Utilisez le format local-part@hostname",
    "'%hostname%' is not a valid hostname for the email address" => "'%hostname%' n'est pas un nom d'hôte valide pour l'adresse email",
    "'%hostname%' does not appear to have any valid MX or A records for the email address" => "'%hostname%' ne semble pas avoir d'enregistrement MX valide pour l'adresse email",
    "'%hostname%' is not in a routable network segment. The email address should not be resolved from public network" => "'%hostname%' n'est pas dans un segment réseau routable. L'adresse email ne devrait pas être résolue depuis un réseau public.",
    "'%localPart%' can not be matched against dot-atom format" => "'%localPart%' ne correspond pas au format dot-atom",
    "'%localPart%' can not be matched against quoted-string format" => "'%localPart%' ne correspond pas au format quoted-string",
    "'%localPart%' is not a valid local part for the email address" => "'%localPart%' n'est pas une partie locale valide pour l'adresse email",
    "The input exceeds the allowed length" => "L'entrée dépasse la taille autorisée",

    // Laminas\Validator\Explode
    "Invalid type given" => "Type invalide",

    // Laminas\Validator\File\Count
    "Too many files, maximum '%max%' are allowed but '%count%' are given" => "Trop de fichiers. '%max%' sont autorisés au maximum, mais '%count%' reçu(s)",
    "Too few files, minimum '%min%' are expected but '%count%' are given" => "Trop peu de fichiers. '%min%' sont attendus, mais '%count%' reçu(s)",

    // Laminas\Validator\File\Crc32
    "File does not match the given crc32 hashes" => "Le fichier ne correspond pas aux sommes de contrôle CRC32 données",
    "A crc32 hash could not be evaluated for the given file" => "Une somme de contrôle CRC32 n'a pas pu être calculée pour le fichier",
    "File is not readable or does not exist" => "Le fichier n'est pas lisible ou n'existe pas",

    // Laminas\Validator\File\ExcludeExtension
    "File has an incorrect extension" => "Le fichier a une extension incorrecte",
    "File is not readable or does not exist" => "Le fichier n'est pas lisible ou n'existe pas",

    // Laminas\Validator\File\Exists
    "File does not exist" => "Le fichier n'existe pas",

    // Laminas\Validator\File\Extension
    "File has an incorrect extension" => "Le fichier a une extension incorrecte",
    "File is not readable or does not exist" => "Le fichier n'est pas lisible ou n'existe pas",

    // Laminas\Validator\File\FilesSize
    "All files in sum should have a maximum size of '%max%' but '%size%' were detected" => "Tous les fichiers devraient avoir une taille maximale de '%max%' mais une taille de '%size%' a été détectée",
    "All files in sum should have a minimum size of '%min%' but '%size%' were detected" => "Tous les fichiers devraient avoir une taille minimale de '%max%' mais une taille de '%size%' a été détectée",
    "One or more files can not be read" => "Un ou plusieurs fichiers ne peuvent être lus",

    // Laminas\Validator\File\Hash
    "File does not match the given hashes" => "Le fichier ne correspond pas aux sommes de contrôle données",
    "A hash could not be evaluated for the given file" => "Une somme de contrôle n'a pas pu être calculée pour le fichier",
    "File is not readable or does not exist" => "Le fichier '%value%' n'est pas lisible ou n'existe pas",

    // Laminas\Validator\File\ImageSize
    "Maximum allowed width for image should be '%maxwidth%' but '%width%' detected" => "La largeur maximale pour l'image devrait être de '%maxwidth%', mais largeur de '%width%' détectée",
    "Minimum expected width for image should be '%minwidth%' but '%width%' detected" => "La largeur minimale pour l'image devrait être de '%minwidth%', mais largeur de '%width%' détectée",
    "Maximum allowed height for image should be '%maxheight%' but '%height%' detected" => "La hauteur maximale pour l'image devrait être de '%maxheight%', mais hauteur de '%height%' détectée",
    "Minimum expected height for image should be '%minheight%' but '%height%' detected" => "La hauteur maximale pour l'image devrait être de '%minheight%', mais hauteur de '%height%' détectée",
    "The size of image could not be detected" => "La taille de l'image n'a pas pu être détectée",
    "File is not readable or does not exist" => "Le fichier n'est pas lisible ou n'existe pas",

    // Laminas\Validator\File\IsCompressed
    "File is not compressed, '%type%' detected" => "Le fichier n'est pas compressé, '%type%' détecté",
    "The mimetype could not be detected from the file" => "Le type MIME du fichier n'a pas pu être détecté",
    "File is not readable or does not exist" => "Le fichier n'est pas lisible ou n'existe pas",

    // Laminas\Validator\File\IsImage
    "File is no image, '%type%' detected" => "Le fichier n'est pas une image, '%type%' détecté",
    "The mimetype could not be detected from the file" => "Le type MIME du fichier n'a pas pu être détecté",
    "File is not readable or does not exist" => "Le fichier n'est pas lisible ou n'existe pas",

    // Laminas\Validator\File\Md5
    "File does not match the given md5 hashes" => "Le fichier ne correspond pas aux sommes de contrôle MD5 données",
    "An md5 hash could not be evaluated for the given file" => "Une somme de contrôle MD5 n'a pas pu être calculée pour le fichier",
    "File is not readable or does not exist" => "Le fichier n'est pas lisible ou n'existe pas",

    // Laminas\Validator\File\MimeType
    "File has an incorrect mimetype of '%type%'" => "Le fichier a un type MIME incorrect : '%type%'",
    "The mimetype could not be detected from the file" => "Le type MIME du fichier n'a pas pu être détecté",
    "File is not readable or does not exist" => "Le fichier n'est pas lisible ou n'existe pas",

    // Laminas\Validator\File\NotExists
    "File exists" => "Le fichier existe",

    // Laminas\Validator\File\Sha1
    "File does not match the given sha1 hashes" => "Le fichier ne correspond pas aux sommes de contrôle SHA1 données",
    "A sha1 hash could not be evaluated for the given file" => "Une somme de contrôle SHA1 n'a pas pu être calculée pour le fichier",
    "File is not readable or does not exist" => "Le fichier n'est pas lisible ou n'existe pas",

    // Laminas\Validator\File\Size
    "Maximum allowed size for file is '%max%' but '%size%' detected" => "La taille de fichier maximale est '%max%', mais '%size%' détectée",
    "Minimum expected size for file is '%min%' but '%size%' detected" => "La taille de fichier minimale est '%min%', mais '%size%' détectée",
    "File is not readable or does not exist" => "Le fichier n'est pas lisible ou n'existe pas",

    // Laminas\Validator\File\Upload
    "File '%value%' exceeds the defined ini size" => "Le fichier '%value%' dépasse la taille définie dans le fichier INI",
    "File '%value%' exceeds the defined form size" => "Le fichier '%value%' dépasse la taille définie dans le formulaire",
    "File '%value%' was only partially uploaded" => "Le fichier '%value%' n'a été que partiellement envoyé",
    "File '%value%' was not uploaded" => "Le fichier '%value%' n'a pas été envoyé",
    "No temporary directory was found for file '%value%'" => "Le dossier temporaire n'a pas été trouvé pour le fichier '%value%'",
    "File '%value%' can't be written" => "Impossible d'écrire dans le fichier '%value%'",
    "A PHP extension returned an error while uploading the file '%value%'" => "Une extension PHP a retourné une erreur en envoyant le fichier '%value%'",
    "File '%value%' was illegally uploaded. This could be a possible attack" => "Le fichier '%value%' a été envoyé illégalement. Il peut s'agir d'une attaque",
    "File '%value%' was not found" => "Le fichier '%value%' n'a pas été trouvé",
    "Unknown error while uploading file '%value%'" => "Erreur inconnue lors de l'envoi du fichier '%value%'",

    // Laminas\Validator\File\UploadFile
    "File exceeds the defined ini size" => "Le fichier dépasse la taille définie dans le fichier INI",
    "File exceeds the defined form size" => "Le fichier dépasse la taille définie dans le formulaire",
    "File was only partially uploaded" => "Le fichier n'a été que partiellement envoyé",
    "File was not uploaded" => "Le fichier n'a pas été envoyé",
    "No temporary directory was found for file" => "Le dossier temporaire n'a pas été trouvé pour le fichier",
    "File can't be written" => "Impossible d'écrire dans le fichier",
    "A PHP extension returned an error while uploading the file" => "Une extension PHP a retourné une erreur en envoyant le fichier",
    "File was illegally uploaded. This could be a possible attack" => "Le fichier a été envoyé illégalement. Il peut s'agir d'une attaque",
    "File was not found" => "Le fichier n'a pas été trouvé",
    "Unknown error while uploading file" => "Erreur inconnue lors de l'envoi du fichier",

    // Laminas\Validator\File\WordCount
    "Too many words, maximum '%max%' are allowed but '%count%' were counted" => "Trop de mots. '%max%' sont autorisés, '%count%' comptés",
    "Too few words, minimum '%min%' are expected but '%count%' were counted" => "Pas assez de mots. '%min%' sont attendus, '%count%' comptés",
    "File is not readable or does not exist" => "Le fichier n'est pas lisible ou n'existe pas",

    // Laminas\Validator\GreaterThan
    "The input is not greater than '%min%'" => "L'entrée n'est pas supérieure à '%min%'",
    "The input is not greater than or equal to '%min%'" => "L'entrée n'est pas supérieure ou égale à '%min%'",

    // Laminas\Validator\Hex
    "Invalid type given. String expected" => "Type invalide. Chaîne attendue",
    "The input contains non-hexadecimal characters" => "L'entrée contient des caractères non-hexadécimaux",

    // Laminas\Validator\Hostname
    "The input appears to be a DNS hostname but the given punycode notation cannot be decoded" => "L'entrée semble être un DNS valide mais le code n'a pu être décodé",
    "Invalid type given. String expected" => "Type invalide. Chaîne attendue",
    "The input appears to be a DNS hostname but contains a dash in an invalid position" => "L'entrée semble être un nom d'hôte DNS mais il contient un tiret à une position invalide",
    "The input does not match the expected structure for a DNS hostname" => "L'entrée ne correspond pas à la structure attendue d'un nom d'hôte DNS",
    "The input appears to be a DNS hostname but cannot match against hostname schema for TLD '%tld%'" => "L'entrée semble être un nom d'hôte DNS valide mais ne correspond pas au schéma de l'extension TLD '%tld%'",
    "The input does not appear to be a valid local network name" => "L'entrée ne semble pas être un nom de réseau local valide",
    "The input does not appear to be a valid URI hostname" => "L'entrée ne semble pas être une URI de nom d'hôte valide",
    "The input appears to be an IP address, but IP addresses are not allowed" => "L'entrée semble être une adresse IP valide, mais les adresses IP ne sont pas autorisées",
    "The input appears to be a local network name but local network names are not allowed" => "L'entrée semble être un nom de réseau local, mais les réseaux locaux ne sont pas autorisés",
    "The input appears to be a DNS hostname but cannot extract TLD part" => "L'entrée semble être un nom d'hôte DNS mais l'extension TLD ne peut être extraite",
    "The input appears to be a DNS hostname but cannot match TLD against known list" => "L'entrée semble être un nom d'hôte DNS mais son extension TLD semble inconnue",

    // Laminas\Validator\Iban
    "Unknown country within the IBAN" => "Pays inconnu pour l'IBAN",
    "Countries outside the Single Euro Payments Area (SEPA) are not supported" => "Les pays en dehors du Single Euro Payments Area (SEPA) ne sont pas supportés",
    "The input has a false IBAN format" => "L'entrée n'a pas un format IBAN valide",
    "The input has failed the IBAN check" => "L'entrée n'a pas passé la validation IBAN",

    // Laminas\Validator\Identical
    "The two given tokens do not match" => "Les deux jetons passés ne correspondent pas",
    "No token was provided to match against" => "Aucun jeton de correspondance n'a été donné",

    // Laminas\Validator\InArray
    "The input was not found in the haystack" => "L'entrée ne fait pas partie des valeurs attendues",

    // Laminas\Validator\Ip
    "Invalid type given. String expected" => "Type invalide. Chaîne attendue",
    "The input does not appear to be a valid IP address" => "L'entrée ne semble pas être une adresse IP valide",

    // Laminas\Validator\IsInstanceOf
    "The input is not an instance of '%className%'" => "L'entrée n'est pas une instance de '%className%'",

    // Laminas\Validator\Isbn
    "Invalid type given. String or integer expected" => "Type invalide. Chaîne ou entier attendu",
    "The input is not a valid ISBN number" => "L'entrée n'est pas un numéro ISBN valide",

    // Laminas\Validator\LessThan
    "The input is not less than '%max%'" => "L'entrée n'est pas inférieure à '%max%'",
    "The input is not less or equal than '%max%'" => "L'entrée n'est pas inférieure ou égale à '%max%'",

    // Laminas\Validator\NotEmpty
    "Value is required and can't be empty" => "Une valeur est requise et ne peut être vide",
    "Invalid type given. String, integer, float, boolean or array expected" => "Type invalide. Chaîne, entier, flottant, booléen ou tableau attendu",

    // Laminas\Validator\Regex
    "Invalid type given. String, integer or float expected" => "Type invalide. Chaîne, entier ou flottant attendu",
    "The input does not match against pattern '%pattern%'" => "L'entrée n'est pas valide avec l'expression '%pattern%'",
    "There was an internal error while using the pattern '%pattern%'" => "Une erreur interne est survenue avec l'expression '%pattern%'",

    // Laminas\Validator\Sitemap\Changefreq
    "The input is not a valid sitemap changefreq" => "L'entrée n'est pas une valeur de fréquence de sitemap valide",
    "Invalid type given. String expected" => "Type invalide. Chaîne attendue",

    // Laminas\Validator\Sitemap\Lastmod
    "The input is not a valid sitemap lastmod" => "L'entrée n'est pas une date de modification de sitemap valide",
    "Invalid type given. String expected" => "Type invalide. Chaîne attendue",

    // Laminas\Validator\Sitemap\Loc
    "The input is not a valid sitemap location" => "L'entrée n'est pas un emplacement de sitemap valide",
    "Invalid type given. String expected" => "Type invalide. Chaîne attendue",

    // Laminas\Validator\Sitemap\Priority
    "The input is not a valid sitemap priority" => "L'entrée n'est pas une priorité de sitemap valide",
    "Invalid type given. Numeric string, integer or float expected" => "Type invalide. Chaîne numérique, entier ou flottant attendu",

    // Laminas\Validator\Step
    "Invalid value given. Scalar expected" => "Type invalide. Scalaire attendu",
    "The input is not a valid step" => "L'entrée n'est pas un multiple valide",

    // Laminas\Validator\StringLength
    "Invalid type given. String expected" => "Type invalide. Chaîne attendue",
    "The input is less than %min% characters long" => "L'entrée contient moins de %min% caractères",
    "The input is more than %max% characters long" => "L'entrée contient plus de %max% caractères",

    // Laminas\Validator\Timezone
    "Invalid timezone given." => "Fuseau horaire invalide.",
    "Invalid timezone location given." => "Lieu de fuseau horaire invalide.",
    "Invalid timezone abbreviation given." => "Abbréviation de fuseau horaire invalide.",

    // Laminas\Validator\Uri
    "Invalid type given. String expected" => "Type invalide. Chaîne attendue",
    "The input does not appear to be a valid Uri" => "L'entrée ne semble pas être une URI valide",
];
