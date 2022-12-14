<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'name'                      => 'Name',
            'name_helper'               => ' ',
            'email'                     => 'Email',
            'email_helper'              => ' ',
            'mobile'                     => 'Mobile',
            'mobile_helper'              => ' ',
            'email_verified_at'         => 'Email verified at',
            'email_verified_at_helper'  => ' ',
            'password'                  => 'Password',
            'password_helper'           => ' ',
            'roles'                     => 'Roles',
            'roles_helper'              => ' ',
            'remember_token'            => 'Remember Token',
            'remember_token_helper'     => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'approved'                  => 'Approved',
            'approved_helper'           => ' ',
            'verified'                  => 'Verified',
            'verified_helper'           => ' ',
            'verified_at'               => 'Verified at',
            'verified_at_helper'        => ' ',
            'verification_token'        => 'Verification token',
            'verification_token_helper' => ' ',
            'avatar'                   => 'Avatar',
            'avatar_helper'            => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'setting'          => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
        'fields'         => [
            'id'                              => 'ID',
            'id_helper'                       => ' ',
            'site_title'                      => 'Site Title',
            'site_title_helper'               => ' ',
            'favicon'                         => 'Favicon',
            'favicon_helper'                  => ' ',
            'logo'                            => 'Logo',
            'logo_helper'                     => ' ',
            'meta_description'                => 'Meta Description',
            'meta_description_helper'         => ' ',
            'meta_keywords'                   => 'Meta Keywords',
            'meta_keywords_helper'            => 'Meta Keywords',
            'banner_heading'                  => 'Banner Heading',
            'banner_heading_helper'           => 'BVCL Heading',
            'banner_sub_heading'              => 'Banner Sub Heading',
            'banner_sub_heading_helper'       => 'BVCL Sub Heading',
            'watermark'                       => 'Watermark',
            'watermark_helper'                => ' ',
            'watermark_image'                 => 'Watermark Image',
            'watermark_image_helper'          => ' ',
            'banner'                          => 'Banner',
            'banner_helper'                   => ' ',
            'site_email'                      => 'Site Email',
            'site_email_helper'               => ' ',
            'site_phone_number'               => 'Site Phone Number',
            'site_phone_number_helper'        => ' ',
            'address'                         => 'Address',
            'address_helper'                  => ' ',
            'google_analytics'                => 'Google Analytics',
            'google_analytics_helper'         => ' ',
            'maintenance_mode'                => 'Maintenance Mode',
            'maintenance_mode_helper'         => ' ',
            'admin_approval'                => 'Admin Approval for New User',
            'admin_approval_helper'         => ' ',
            'maintenance_mode_title'          => 'Maintenance Mode Title',
            'maintenance_mode_title_helper'   => ' ',
            'maintenance_mode_content'        => 'Maintenance Mode Content',
            'maintenance_mode_content_helper' => ' ',
            'homepage_background'             => 'Homepage Background',
            'homepage_background_helper'      => ' ',
            'copyright'                       => 'Copyright',
            'copyright_helper'                => ' ',
            'facebook'                        => 'Facebook',
            'facebook_helper'                 => 'https://www.facebook.com/',
            'facebook_icon'                   => 'Facebook Icon',
            'facebook_icon_helper'            => ' ',
            'twitter'                         => 'Twitter',
            'twitter_helper'                  => 'https://www.twitter.com/',
            'twitter_icon'                    => 'Twitter Icon',
            'twitter_icon_helper'             => 'Twitter Icon',
            'linkedin'                        => 'Linkedin',
            'linkedin_helper'                 => 'https://www.linkedin.com/',
            'linkedin_icon'                   => 'Linkedin Icon',
            'linkedin_icon_helper'            => ' ',
            'summary'                         => 'Summary',
            'summary_helper'                  => ' ',
            'about'                           => 'About',
            'about_helper'                    => ' ',
            'created_at'                      => 'Created at',
            'created_at_helper'               => ' ',
            'updated_at'                      => 'Updated at',
            'updated_at_helper'               => ' ',
            'deleted_at'                      => 'Deleted at',
            'deleted_at_helper'               => ' ',
        ],
    ],
    'position' => [
        'title'          => 'Position',
        'title_singular' => 'Position',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'content'           => 'Content',
            'content_helper'    => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
            'is_active'         => 'Is Active',
            'is_active_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'menu' => [
        'title'          => 'Menus',
        'title_singular' => 'Menu',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'title'                => 'Title',
            'title_helper'         => ' ',
            'slug'                 => 'Slug',
            'slug_helper'          => ' ',
            'link_type'            => 'Link Type',
            'link_type_helper'     => ' ',
            'external_link'        => 'External Link',
            'external_link_helper' => ' ',
            'serial'               => 'Serial',
            'serial_helper'        => ' ',
            'parent'               => 'Parent',
            'parent_helper'        => ' ',
            'position'             => 'Position',
            'position_helper'      => ' ',
            'is_active'            => 'Is Active',
            'is_active_helper'     => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'menuManagement' => [
        'title'          => 'Menu Management',
        'title_singular' => 'Menu Management',
    ],
    'articleManagement' => [
        'title'          => 'Article Management',
        'title_singular' => 'Article Management',
    ],
    'articleCategory' => [
        'title'          => 'Article Category',
        'title_singular' => 'Article Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'is_active'         => 'Is Active',
            'is_active_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'article' => [
        'title'          => 'Articles',
        'title_singular' => 'Article',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'title'                => 'Title',
            'title_helper'         => ' ',
            'slug'                 => 'Slug',
            'slug_helper'          => ' ',
            'summary'              => 'Summary',
            'summary_helper'       => ' ',
            'content'              => 'Content',
            'content_helper'       => ' ',
            'feature_image'        => 'Feature Image',
            'feature_image_helper' => ' ',
            'category'             => 'Category',
            'category_helper'      => ' ',
            'menu'                 => 'Menu',
            'menu_helper'          => ' ',
            'is_status'            => 'Is Status',
            'is_status_helper'     => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'icon_class_name'           => 'Icon class name',
            'icon_class_name_helper'    => ' ',
        ],
    ],
    'slider' => [
        'title'          => 'Sliders',
        'title_singular' => 'Slider',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'title'                   => 'Title',
            'title_helper'            => ' ',
            'sub_title'               => 'Sub Title',
            'sub_title_helper'        => ' ',
            'content'                 => 'Content',
            'content_helper'          => ' ',
            'get_started_text'        => 'Get Started Text',
            'get_started_text_helper' => ' ',
            'get_started_url'         => 'Get Started Url',
            'get_started_url_helper'  => ' ',
            'learn_more_text'         => 'Learn More Text',
            'learn_more_text_helper'  => ' ',
            'learn_more_url'          => 'Learn More Url',
            'learn_more_url_helper'   => ' ',
            'slider_image'            => 'Slider Image',
            'slider_image_helper'     => ' ',
            'is_active'               => 'Is Active',
            'is_active_helper'        => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
        ],
    ],
    'partner' => [
        'title'          => 'Partners',
        'title_singular' => 'Partner',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'partner_name'        => 'Partner Name',
            'partner_name_helper' => ' ',
            'website_url'         => 'Website Url',
            'website_url_helper'  => ' ',
            'partner_logo'        => 'Partner Logo',
            'partner_logo_helper' => ' ',
            'is_active'           => 'Is Active',
            'is_active_helper'    => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'social' => [
        'title'          => 'Socials',
        'title_singular' => 'Social',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'title'                  => 'Title',
            'title_helper'           => ' ',
            'url'                    => 'Url',
            'url_helper'             => ' ',
            'icon_class_name'        => 'Icon Class Name',
            'icon_class_name_helper' => ' ',
            'is_active'              => 'Is Active',
            'is_active_helper'       => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'testimonial' => [
        'title'          => 'Testimonial',
        'title_singular' => 'Testimonial',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'designation'              => 'Designation',
            'designation_helper'       => ' ',
            'organization_name'        => 'Organization Name',
            'organization_name_helper' => ' ',
            'about'                    => 'About',
            'about_helper'             => ' ',
            'avatar'                   => 'Avatar',
            'avatar_helper'            => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'contact' => [
        'title'          => 'Contacts',
        'title_singular' => 'Contact',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'mobile'            => 'Mobile',
            'mobile_helper'     => ' ',
            'message'           => 'Message',
            'message_helper'    => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'team' => [
        'title'          => 'Teams',
        'title_singular' => 'Team',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'email'              => 'Email',
            'email_helper'       => ' ',
            'mobile'             => 'Mobile',
            'mobile_helper'      => ' ',
            'designation'        => 'Designation',
            'designation_helper' => ' ',
            'about'              => 'About',
            'about_helper'       => ' ',
            'avatar'             => 'Avatar',
            'avatar_helper'      => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'courseCategory' => [
        'title'          => 'Course Category',
        'title_singular' => 'Course Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'about'             => 'About',
            'about_helper'      => ' ',
            'is_active'         => 'Is Active',
            'is_active_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'coursesSeeting' => [
        'title'          => 'Courses Seetings',
        'title_singular' => 'Courses Seeting',
    ],
    'skillsCovered' => [
        'title'          => 'Skills Covered',
        'title_singular' => 'Skills Covered',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'is_active'         => 'Is Active',
            'is_active_helper'  => ' ',
        ],
    ],
    'RequiredSkill' => [
        'title'          => 'Required SKills',
        'title_singular' => 'Required SKill',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'is_active'         => 'Is Active',
            'is_active_helper'  => ' ',
        ],
    ],
    'lessonType' => [
        'title'          => 'Lesson Types',
        'title_singular' => 'Lesson Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'is_active'         => 'Is Active',
            'is_active_helper'  => ' ',
        ],
    ],
    'courseContentType' => [
        'title'          => 'Course Content Type',
        'title_singular' => 'Course Content Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'is_active'         => 'Is Active',
            'is_active_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'course' => [
        'title'          => 'Courses',
        'title_singular' => 'Course',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => ' ',
            'course_category'            => 'Course Category',
            'course_category_helper'     => ' ',
            'title'                      => 'Title',
            'title_helper'               => ' ',
            'slug'                       => 'Slug',
            'slug_helper'                => ' ',
            'introduction'               => 'Introduction',
            'introduction_helper'        => ' ',
            'about_this_course'          => 'About This Course',
            'about_this_course_helper'   => ' ',
            'duration'                   => 'Duration',
            'duration_helper'            => ' ',
            'class_start_date'           => 'Class Start Date',
            'class_start_date_helper'    => ' ',
            'class_end_date'             => 'Class End Date',
            'class_end_date_helper'      => ' ',
            'course_content_type'        => 'Course Content Type',
            'course_content_type_helper' => ' ',
            'skill_covered'              => 'Skill Covered',
            'skill_covered_helper'       => ' ',
            'required_skill'             => 'Required Skill',
            'required_skill_helper'      => ' ',
            'is_active'                  => 'Is Active',
            'is_active_helper'           => ' ',
            'picture'                    => 'Picture',
            'picture_helper'             => 'Course Picture',
            'created_at'                 => 'Created at',
            'created_at_helper'          => ' ',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => ' ',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => ' ',
        ],
    ],
    'lesson' => [
        'title'          => 'Lessons',
        'title_singular' => 'Lesson',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'slug'               => 'Slug',
            'slug_helper'        => ' ',
            'course'             => 'Course',
            'course_helper'      => ' ',
            'lesson_type'        => 'Lesson Type',
            'lesson_type_helper' => ' ',
            'is_active'          => 'Is Active',
            'is_active_helper'   => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],

];
