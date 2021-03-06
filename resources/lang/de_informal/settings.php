<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Einstellungen',
    'settings_save' => 'Einstellungen speichern',
    'settings_save_success' => 'Einstellungen gespeichert',

    // App Settings
    'app_customization' => 'Personalisierung',
    'app_features_security' => 'Funktionen & Sicherheit',
    'app_name' => 'Anwendungsname',
    'app_name_desc' => 'Dieser Name wird im Header und in E-Mails angezeigt.',
    'app_name_header' => 'Anwendungsname im Header anzeigen?',
    'app_public_access' => 'Öffentlicher Zugriff',
    'app_public_access_desc' => 'Wenn Sie diese Option aktivieren, können Besucher, die nicht angemeldet sind, auf Inhalte in Ihrer BookStack-Instanz zugreifen.',
    'app_public_access_desc_guest' => 'Der Zugang für öffentliche Besucher kann über den Benutzer "Guest" gesteuert werden.',
    'app_public_access_toggle' => 'Öffentlichen Zugriff erlauben',
    'app_public_viewing' => 'Öffentliche Ansicht erlauben?',
    'app_secure_images' => 'Erhöhte Sicherheit für hochgeladene Bilder aktivieren?',
    'app_secure_images_toggle' => 'Aktiviere Bild-Upload mit höherer Sicherheit',
    'app_secure_images_desc' => 'Aus Leistungsgründen sind alle Bilder öffentlich sichtbar. Diese Option fügt zufällige, schwer zu eratene, Zeichenketten zu Bild-URLs hinzu. Stellen sie sicher, dass Verzeichnisindizes deaktiviert sind, um einen einfachen Zugriff zu verhindern.',
    'app_editor' => 'Seiteneditor',
    'app_editor_desc' => 'Wähle den Editor aus, der von allen Benutzern genutzt werden soll, um Seiten zu editieren.',
    'app_custom_html' => 'Benutzerdefinierter HTML <head> Inhalt',
    'app_custom_html_desc' => 'Jeder Inhalt, der hier hinzugefügt wird, wird am Ende der <head> Sektion jeder Seite eingefügt. Diese kann praktisch sein, um CSS Styles anzupassen oder Analytics-Code hinzuzufügen.',
    'app_custom_html_disabled_notice' => 'Benutzerdefinierte HTML-Kopfzeileninhalte sind auf dieser Einstellungsseite deaktiviert, um sicherzustellen, dass alle Änderungen rückgängig gemacht werden können.',
    'app_logo' => 'Anwendungslogo',
    'app_logo_desc' => 'Dieses Bild sollte 43px hoch sein.
Größere Bilder werden verkleinert.',
    'app_primary_color' => 'Primäre Anwendungsfarbe',
    'app_primary_color_desc' => 'Dies sollte ein HEX Wert sein.
Wenn Du nichts eingibst, wird die Anwendung auf die Standardfarbe zurückgesetzt.',
    'app_homepage' => 'Startseite der Anwendung',
    'app_homepage_desc' => 'Wähle eine Seite als Startseite aus, die statt der Standardansicht angezeigt werden soll. Seitenberechtigungen werden für die ausgewählten Seiten ignoriert.',
    'app_homepage_select' => 'Wählen Sie eine Seite aus',
    'app_disable_comments' => 'Kommentare deaktivieren',
    'app_disable_comments_toggle' => 'Kommentare deaktivieren',
    'app_disable_comments_desc' => 'Deaktiviert Kommentare über alle Seiten in der Anwendung. Vorhandene Kommentare werden nicht angezeigt.',

    // Color settings
    'content_colors' => 'Inhaltsfarben',
    'content_colors_desc' => 'Legt Farben für alle Elemente in der Seitenorganisationshierarchie fest. Die Auswahl von Farben mit einer ähnlichen Helligkeit wie die Standardfarben wird zur Lesbarkeit empfohlen.',
    'bookshelf_color' => 'Regalfarbe',
    'book_color' => 'Buchfarbe',
    'chapter_color' => 'Kapitelfarbe',
    'page_color' => 'Seitenfarbe',
    'page_draft_color' => 'Seitenentwurfsfarbe',

    // Registration Settings
    'reg_settings' => 'Registrierungseinstellungen',
    'reg_enable' => 'Registrierung erlauben?',
    'reg_enable_toggle' => 'Registrierung erlauben',
    'reg_enable_desc' => 'Wenn die Registrierung erlaubt ist, kann sich der Benutzer als Anwendungsbenutzer anmelden. Bei der Registrierung erhält er eine einzige, voreingestellte Benutzerrolle.',
    'reg_default_role' => 'Standard-Benutzerrolle nach Registrierung',
    'reg_enable_external_warning' => 'Die obige Option wird ignoriert, während eine externe LDAP oder SAML Authentifizierung aktiv ist. Benutzerkonten für nicht existierende Mitglieder werden automatisch erzeugt, wenn die Authentifizierung gegen das verwendete externe System erfolgreich ist.',
    'reg_email_confirmation' => 'Bestätigung per E-Mail',
    'reg_email_confirmation_toggle' => 'Bestätigung per E-Mail erforderlich',
    'reg_confirm_email_desc' => 'Falls die Einschränkung für Domains genutzt wird, ist die Bestätigung per E-Mail zwingend erforderlich und der untenstehende Wert wird ignoriert.',
    'reg_confirm_restrict_domain' => 'Registrierung auf bestimmte Domains einschränken',
    'reg_confirm_restrict_domain_desc' => 'Fügen sie eine durch Komma getrennte Liste von Domains hinzu, auf die die Registrierung eingeschränkt werden soll. Benutzern wird eine E-Mail gesendet, um ihre E-Mail Adresse zu bestätigen, bevor sie diese Anwendung nutzen können.
Hinweis: Benutzer können ihre E-Mail Adresse nach erfolgreicher Registrierung ändern.',
    'reg_confirm_restrict_domain_placeholder' => 'Keine Einschränkung gesetzt',

    // Maintenance settings
    'maint' => 'Wartung',
    'maint_image_cleanup' => 'Bilder bereinigen',
    'maint_image_cleanup_desc' => "Überprüft Seiten- und Versionsinhalte auf ungenutzte und mehrfach vorhandene Bilder. Erstelle vor dem Start ein Backup Deiner Datenbank und Bilder.",
    'maint_image_cleanup_ignore_revisions' => 'Bilder in Versionen ignorieren',
    'maint_image_cleanup_run' => 'Reinigung starten',
    'maint_image_cleanup_warning' => ':count eventuell unbenutze Bilder wurden gefunden. Möchtest Du diese Bilder löschen?',
    'maint_image_cleanup_success' => ':count eventuell unbenutze Bilder wurden gefunden und gelöscht.',
    'maint_image_cleanup_nothing_found' => 'Keine unbenutzen Bilder gefunden. Nichts zu löschen!',
    'maint_send_test_email' => 'Test Email versenden',
    'maint_send_test_email_desc' => 'Dies sendet eine Test E-Mail an die in deinem Profil angegebene E-Mail-Adresse.',
    'maint_send_test_email_run' => 'Sende eine Test E-Mail',
    'maint_send_test_email_success' => 'E-Mail wurde an :address gesendet',
    'maint_send_test_email_mail_subject' => 'Test E-Mail',
    'maint_send_test_email_mail_greeting' => 'E-Mail-Versand scheint zu funktionieren!',
    'maint_send_test_email_mail_text' => 'Glückwunsch! Da du diese E-Mail Benachrichtigung erhalten hast, scheinen deine E-Mail-Einstellungen korrekt konfiguriert zu sein.',

    // Role Settings
    'roles' => 'Rollen',
    'role_user_roles' => 'Benutzer-Rollen',
    'role_create' => 'Neue Rolle anlegen',
    'role_create_success' => 'Rolle erfolgreich angelegt',
    'role_delete' => 'Rolle löschen',
    'role_delete_confirm' => 'Du möchtest die Rolle ":roleName" löschen.',
    'role_delete_users_assigned' => 'Diese Rolle ist :userCount Benutzern zugeordnet. Du kannst unten eine neue Rolle auswählen, die Du diesen Benutzern zuordnen möchtest.',
    'role_delete_no_migration' => "Den Benutzern keine andere Rolle zuordnen",
    'role_delete_sure' => 'Bist Du sicher, dass Du diese Rolle löschen möchtest?',
    'role_delete_success' => 'Rolle erfolgreich gelöscht',
    'role_edit' => 'Rolle bearbeiten',
    'role_details' => 'Rollendetails',
    'role_name' => 'Rollenname',
    'role_desc' => 'Kurzbeschreibung der Rolle',
    'role_external_auth_id' => 'Externe Authentifizierungs-IDs',
    'role_system' => 'System-Berechtigungen',
    'role_manage_users' => 'Benutzer verwalten',
    'role_manage_roles' => 'Rollen und Rollen-Berechtigungen verwalten',
    'role_manage_entity_permissions' => 'Alle Buch-, Kapitel- und Seiten-Berechtigungen verwalten',
    'role_manage_own_entity_permissions' => 'Nur Berechtigungen eigener Bücher, Kapitel und Seiten verwalten',
    'role_manage_page_templates' => 'Seitenvorlagen verwalten',
    'role_access_api' => 'Systemzugriffs-API',
    'role_manage_settings' => 'Globaleinstellungen verwalten',
    'role_asset' => 'Berechtigungen',
    'role_asset_desc' => 'Diese Berechtigungen gelten für den Standard-Zugriff innerhalb des Systems. Berechtigungen für Bücher, Kapitel und Seiten überschreiben diese Berechtigungenen.',
    'role_asset_admins' => 'Administratoren erhalten automatisch Zugriff auf alle Inhalte, aber diese Optionen können Oberflächenoptionen ein- oder ausblenden.',
    'role_all' => 'Alle',
    'role_own' => 'Eigene',
    'role_controlled_by_asset' => 'Berechtigungen werden vom Uploadziel bestimmt',
    'role_save' => 'Rolle speichern',
    'role_update_success' => 'Rolle erfolgreich gespeichert',
    'role_users' => 'Dieser Rolle zugeordnete Benutzer',
    'role_users_none' => 'Bisher sind dieser Rolle keine Benutzer zugeordnet',

    // Users
    'users' => 'Benutzer',
    'user_profile' => 'Benutzerprofil',
    'users_add_new' => 'Benutzer hinzufügen',
    'users_search' => 'Benutzer suchen',
    'users_details' => 'Benutzerdetails',
    'users_details_desc' => 'Legen Sie für diesen Benutzer einen Anzeigenamen und eine E-Mail-Adresse fest. Die E-Mail-Adresse wird bei der Anmeldung verwendet.',
    'users_details_desc_no_email' => 'Legen Sie für diesen Benutzer einen Anzeigenamen fest, damit andere ihn erkennen können.',
    'users_role' => 'Benutzerrollen',
    'users_role_desc' => 'Wählen Sie aus, welchen Rollen dieser Benutzer zugeordnet werden soll. Wenn ein Benutzer mehreren Rollen zugeordnet ist, werden die Berechtigungen dieser Rollen gestapelt und er erhält alle Fähigkeiten der zugewiesenen Rollen.',
    'users_password' => 'Benutzerpasswort',
    'users_password_desc' => 'Legen Sie ein Passwort fest, mit dem Sie sich anmelden möchten. Diese muss mindestens 5 Zeichen lang sein.',
    'users_send_invite_text' => 'Du kannst diesem Benutzer eine Einladungs-E-Mail senden, die es ihm erlaubt, sein eigenes Passwort zu setzen, andernfalls kannst du sein Passwort selbst setzen.',
    'users_send_invite_option' => 'Benutzer-Einladungs-E-Mail senden',
    'users_external_auth_id' => 'Externe Authentifizierungs-ID',
    'users_external_auth_id_desc' => 'Dies ist die ID, die verwendet wird, um diesen Benutzer bei der Kommunikation mit deinem externen Authentifizierungssystem abzugleichen.',
    'users_password_warning' => 'Fülle die folgenden Felder nur aus, wenn Du Dein Passwort ändern möchtest:',
    'users_system_public' => 'Dieser Benutzer repräsentiert alle unangemeldeten Benutzer, die diese Seite betrachten. Er kann nicht zum Anmelden benutzt werden, sondern wird automatisch zugeordnet.',
    'users_delete' => 'Benutzer löschen',
    'users_delete_named' => 'Benutzer ":userName" löschen',
    'users_delete_warning' => 'Der Benutzer ":userName" wird aus dem System gelöscht.',
    'users_delete_confirm' => 'Bist Du sicher, dass Du diesen Benutzer löschen möchtest?',
    'users_delete_success' => 'Benutzer erfolgreich gelöscht.',
    'users_edit' => 'Benutzer bearbeiten',
    'users_edit_profile' => 'Profil bearbeiten',
    'users_edit_success' => 'Benutzer erfolgreich aktualisisert',
    'users_avatar' => 'Benutzer-Bild',
    'users_avatar_desc' => 'Das Bild sollte eine Auflösung von 256x256px haben.',
    'users_preferred_language' => 'Bevorzugte Sprache',
    'users_preferred_language_desc' => 'Diese Option ändert die Sprache, die für die Benutzeroberfläche der Anwendung verwendet wird. Dies hat keinen Einfluss auf von Benutzern erstellte Inhalte.',
    'users_social_accounts' => 'Social-Media Konten',
    'users_social_accounts_info' => 'Hier kannst Du andere Social-Media-Konten für eine schnellere und einfachere Anmeldung verknüpfen. Wenn Du ein Social-Media Konto löschst, bleibt der Zugriff erhalten. Entferne in diesem Falle die Berechtigung in Deinen Profil-Einstellungen des verknüpften Social-Media-Kontos.',
    'users_social_connect' => 'Social-Media-Konto verknüpfen',
    'users_social_disconnect' => 'Social-Media-Konto lösen',
    'users_social_connected' => ':socialAccount-Konto wurde erfolgreich mit dem Profil verknüpft.',
    'users_social_disconnected' => ':socialAccount-Konto wurde erfolgreich vom Profil gelöst.',
    'users_api_tokens' => 'API-Token',
    'users_api_tokens_none' => 'Für diesen Benutzer wurden keine API-Token erstellt',
    'users_api_tokens_create' => 'Token erstellen',
    'users_api_tokens_expires' => 'Endet',
    'users_api_tokens_docs' => 'API Dokumentation',

    // API Tokens
    'user_api_token_create' => 'Neuen API-Token erstellen',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Gebe deinem Token einen aussagekräftigen Namen als spätere Erinnerung an seinen Verwendungszweck.',
    'user_api_token_expiry' => 'Ablaufdatum',
    'user_api_token_expiry_desc' => 'Lege ein Datum fest, an dem dieser Token abläuft. Nach diesem Datum funktionieren Anfragen, die mit diesem Token gestellt werden, nicht mehr. Wenn du dieses Feld leer lässt, wird ein Ablaufdatum von 100 Jahren in der Zukunft festgelegt.',
    'user_api_token_create_secret_message' => 'Unmittelbar nach der Erstellung dieses Tokens wird eine "Token ID" & ein "Token Kennwort" generiert und angezeigt. Das Kennwort wird nur ein einziges Mal angezeigt. Stelle also sicher, dass du den Inhalt an einen sicheren Ort kopierst, bevor du fortfährst.',
    'user_api_token_create_success' => 'API-Token erfolgreich erstellt',
    'user_api_token_update_success' => 'API-Token erfolgreich aktualisiert',
    'user_api_token' => 'API-Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Dies ist ein nicht editierbarer, vom System generierter Identifikator für diesen Token, welcher bei API-Anfragen angegeben werden muss.',
    'user_api_token_secret' => 'Token Kennwort',
    'user_api_token_secret_desc' => 'Dies ist ein systemgeneriertes Kennwort für diesen Token, das bei API-Anfragen zur Verfügung gestellt werden muss. Es wird nur dieses eine Mal angezeigt, deshalb kopiere diesen an einen sicheren und geschützten Ort.',
    'user_api_token_created' => 'Token erstellt :timeAgo',
    'user_api_token_updated' => 'Token aktualisiert :timeAgo',
    'user_api_token_delete' => 'Lösche Token',
    'user_api_token_delete_warning' => 'Dies löscht den API-Token mit dem Namen \':tokenName\' vollständig aus dem System.',
    'user_api_token_delete_confirm' => 'Bist du sicher, dass du diesen API-Token löschen möchtest?',
    'user_api_token_delete_success' => 'API-Token erfolgreich gelöscht',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'cs' => 'Česky',
        'da' => 'Dänisch',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'Hebräisch',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slowenisch',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
