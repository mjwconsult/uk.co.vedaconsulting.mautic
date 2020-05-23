<?php

return [
  'mautic_connection_url' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_connection_url',
    'type' => 'String',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'URL to the Mautic installation, without a trailing slash.',
    'title' => 'Mautic Base URL',
    'is_required' => TRUE,
    'help_text' => '',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 50,
      'placeholder' => 'http://example.com',
      'required' => TRUE, 
    ],
  ],
  'mautic_connection_authentication_method' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_connection_authentication_method',
    'type' => 'String',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'The Authentication method used to connect to the Mautic installation.',
    'title' => 'Authentication method',
    'is_required' => TRUE,
    'help_text' => '',
    'html_type' => 'select',
    'html_attributes' => [
      'required' => TRUE,
    ],
    'options' => [
      0 => 'Select',
      'basic' => 'Basic Authentication',
      'oauth1' => 'OAuth 1',
      'oauth2' => 'OAuth 2',
    ],
  ],
  'mautic_basic_username' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_basic_username',
    'type' => 'String',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Mautic Basic Authentication User Name',
    'title' => 'User Name',
    'help_text' => '',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 50,
    ],
  ],
  'mautic_basic_password' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_basic_password',
    'type' => 'String',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Mautic Basic Authentication Password.',
    'title' => 'Password.',
    'help_text' => '',
    'html_type' => 'password',
    'quick_form_type' => 'Element',
    'html_attributes' => [
      'size' => 50,
    ],
  ],
  // OAuth 1 Settings.
  'mautic_oauth1_consumer_key' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_oauth1_consumer_key',
    'type' => 'String',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Mautic Consumer Key',
    'title' => 'Consumer Key',
    'help_text' => '',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 50,
    ],
    'quick_form_type' => 'Element',
  ],
  // OAuth 1.0 mautic (Consumer) Secret
  'mautic_oauth1_consumer_secret' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_oauth1_consumer_secret',
    'type' => 'String',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'The OAuth 1.0 Consumer Secret from your Mautic installation',
    'title' => 'Consumer Secret',
    'help_text' => '',
    'html_type' => 'password',
    'quick_form_type' => 'element',
    'html_attributes' => [
      'size' => 50,
    ],
    'quick_form_type' => 'Element',
  ],
  // End OAuth 1 settings.
  // OAuth 2.0 Settings.
  'mautic_oauth2_client_id' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_oauth2_client_id',
    'type' => 'String',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Mautic Client ID',
    'title' => 'Client ID',
    'help_text' => '',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 50,
    ],
    'quick_form_type' => 'Element',
  ],
  // OAuth 2.0 mautic (Client) Secret
  'mautic_oauth2_client_secret' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_oauth2_client_secret',
    'type' => 'String',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'The OAuth 2.0 Client Secret from your Mautic installation',
    'title' => 'Client Secret',
    'help_text' => '',
    'html_type' => 'password',
    'quick_form_type' => 'element',
    'html_attributes' => [
      'size' => 50,
    ],
    'quick_form_type' => 'Element',
  ],
  'mautic_enable_debugging' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_enable_debugging',
    'type' => 'Boolean',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'If set then debugging messages will be added to the log.',
    'title' => 'Enable Debugging',
    'help_text' => '',
    'html_type' => 'checkbox',
    'quick_form_type' => 'element',
    'html_attributes' => [
      'size' => 50,
    ],
    'quick_form_type' => 'Element',
  ],
  'mautic_webhook_trigger_events' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_webhook_trigger_events',
    'type' => 'checkboxes',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Events on Mautic to listen for.',
    'title' => 'Webhook trigger events',
    'help_text' => '',
    'html_type' => 'checkboxes',
    'is_multiple' => TRUE,
    'multiple' => TRUE,
    'quick_form_type' => 'element',
    'html_attributes' => [
      'size' => 50,
    ],
    'pseudoconstant' => ['callback' => 'CRM_Mautic_WebHook::getAllTriggerOptions'],
    'default' => [
      'mautic.lead_post_delete',
      // Contact Identified Event.
      'mautic.lead_post_save_new',
      // Contact Points Changed Event
      'mautic.lead_points_change',
      // Contact Updated Event.
      'mautic.lead_post_save_update',
    ],
    'quick_form_type' => 'Element',
    
  ],
  // OAuth Access token data.
  'mautic_access_token' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_access_token',
    'type' => 'String',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Mautic Access Token',
    'title' => 'Mautic Access Token',
    'help_text' => '',
    // No form element
  ],
  // OAuth 2.0. Obtained during Mautic authentication.
  'mautic_tenant_id' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_tenant_id',
    'type' => 'String',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Mautic Tenant ID (Organization)',
    'title' => 'Mautic Tenant ID',
    'help_text' => '',
    // No form element
  ],
  'mautic_webhook_security_key' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_webhook_security_key',
    'type' => 'String',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Security key used to verify webhook requests.',
    'title' => 'Webhook Security Key',
    'help_text' => '',
    // No form element
  ],
  'mautic_push_stats' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_push_stats',
    'type' => 'String',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Information about the last push operation.',
    'title' => 'Push Stats',
    'help_text' => '',
    // No form element
  ],
  'mautic_pull_stats' => [
    'group_name' => 'Mautic Settings',
    'group' => 'mautic',
    'name' => 'mautic_pull_stats',
    'type' => 'String',
    'add' => '4.4',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Information about the last pull operation.',
    'title' => 'Pull Stats',
    'help_text' => '',
    // No form element
  ],

];
