<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('city', 'city_created_by_sf_guard_user_id', array(
             'name' => 'city_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('city', 'city_updated_by_sf_guard_user_id', array(
             'name' => 'city_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('client', 'client_user_id_sf_guard_user_id', array(
             'name' => 'client_user_id_sf_guard_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             ));
        $this->createForeignKey('client', 'client_city_id_city_id', array(
             'name' => 'client_city_id_city_id',
             'local' => 'city_id',
             'foreign' => 'id',
             'foreignTable' => 'city',
             ));
        $this->createForeignKey('client', 'client_created_by_sf_guard_user_id', array(
             'name' => 'client_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('client', 'client_updated_by_sf_guard_user_id', array(
             'name' => 'client_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('comment', 'comment_event_id_event_id', array(
             'name' => 'comment_event_id_event_id',
             'local' => 'event_id',
             'foreign' => 'id',
             'foreignTable' => 'event',
             ));
        $this->createForeignKey('comment', 'comment_created_by_sf_guard_user_id', array(
             'name' => 'comment_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('comment', 'comment_updated_by_sf_guard_user_id', array(
             'name' => 'comment_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('coupon', 'coupon_event_id_event_id', array(
             'name' => 'coupon_event_id_event_id',
             'local' => 'event_id',
             'foreign' => 'id',
             'foreignTable' => 'event',
             ));
        $this->createForeignKey('coupon', 'coupon_user_id_sf_guard_user_id', array(
             'name' => 'coupon_user_id_sf_guard_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             ));
        $this->createForeignKey('coupon', 'coupon_created_by_sf_guard_user_id', array(
             'name' => 'coupon_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('coupon', 'coupon_updated_by_sf_guard_user_id', array(
             'name' => 'coupon_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('event', 'event_provider_id_provider_id', array(
             'name' => 'event_provider_id_provider_id',
             'local' => 'provider_id',
             'foreign' => 'id',
             'foreignTable' => 'provider',
             ));
        $this->createForeignKey('event', 'event_created_by_sf_guard_user_id', array(
             'name' => 'event_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('event', 'event_updated_by_sf_guard_user_id', array(
             'name' => 'event_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('faq', 'faq_created_by_sf_guard_user_id', array(
             'name' => 'faq_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('faq', 'faq_updated_by_sf_guard_user_id', array(
             'name' => 'faq_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('file', 'file_provider_id_provider_id', array(
             'name' => 'file_provider_id_provider_id',
             'local' => 'provider_id',
             'foreign' => 'id',
             'foreignTable' => 'provider',
             ));
        $this->createForeignKey('file', 'file_created_by_sf_guard_user_id', array(
             'name' => 'file_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('file', 'file_updated_by_sf_guard_user_id', array(
             'name' => 'file_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('gallery', 'gallery_provider_id_provider_id', array(
             'name' => 'gallery_provider_id_provider_id',
             'local' => 'provider_id',
             'foreign' => 'id',
             'foreignTable' => 'provider',
             ));
        $this->createForeignKey('gallery', 'gallery_created_by_sf_guard_user_id', array(
             'name' => 'gallery_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('gallery', 'gallery_updated_by_sf_guard_user_id', array(
             'name' => 'gallery_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('image', 'image_gallery_id_gallery_id', array(
             'name' => 'image_gallery_id_gallery_id',
             'local' => 'gallery_id',
             'foreign' => 'id',
             'foreignTable' => 'gallery',
             ));
        $this->createForeignKey('image', 'image_created_by_sf_guard_user_id', array(
             'name' => 'image_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('image', 'image_updated_by_sf_guard_user_id', array(
             'name' => 'image_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('phone', 'phone_provider_id_provider_id', array(
             'name' => 'phone_provider_id_provider_id',
             'local' => 'provider_id',
             'foreign' => 'id',
             'foreignTable' => 'provider',
             ));
        $this->createForeignKey('phone', 'phone_created_by_sf_guard_user_id', array(
             'name' => 'phone_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('phone', 'phone_updated_by_sf_guard_user_id', array(
             'name' => 'phone_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('provider', 'provider_user_id_sf_guard_user_id', array(
             'name' => 'provider_user_id_sf_guard_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             ));
        $this->createForeignKey('provider', 'provider_city_id_city_id', array(
             'name' => 'provider_city_id_city_id',
             'local' => 'city_id',
             'foreign' => 'id',
             'foreignTable' => 'city',
             ));
        $this->createForeignKey('provider', 'provider_created_by_sf_guard_user_id', array(
             'name' => 'provider_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('provider', 'provider_updated_by_sf_guard_user_id', array(
             'name' => 'provider_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('ref_event_like', 'ref_event_like_user_id_sf_guard_user_id', array(
             'name' => 'ref_event_like_user_id_sf_guard_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             ));
        $this->createForeignKey('ref_event_like', 'ref_event_like_event_id_event_id', array(
             'name' => 'ref_event_like_event_id_event_id',
             'local' => 'event_id',
             'foreign' => 'id',
             'foreignTable' => 'event',
             ));
        $this->createForeignKey('ref_event_like', 'ref_event_like_user_id_client_id', array(
             'name' => 'ref_event_like_user_id_client_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'client',
             ));
        $this->createForeignKey('city_version', 'city_version_id_city_id', array(
             'name' => 'city_version_id_city_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'city',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('client_version', 'client_version_id_client_id', array(
             'name' => 'client_version_id_client_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'client',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('comment_version', 'comment_version_id_comment_id', array(
             'name' => 'comment_version_id_comment_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'comment',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('coupon_version', 'coupon_version_id_coupon_id', array(
             'name' => 'coupon_version_id_coupon_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'coupon',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('event_version', 'event_version_id_event_id', array(
             'name' => 'event_version_id_event_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'event',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('faq_version', 'faq_version_id_faq_id', array(
             'name' => 'faq_version_id_faq_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'faq',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('file_version', 'file_version_id_file_id', array(
             'name' => 'file_version_id_file_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'file',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('gallery_version', 'gallery_version_id_gallery_id', array(
             'name' => 'gallery_version_id_gallery_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'gallery',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('image_version', 'image_version_id_image_id', array(
             'name' => 'image_version_id_image_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'image',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('phone_version', 'phone_version_id_phone_id', array(
             'name' => 'phone_version_id_phone_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'phone',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('provider_version', 'provider_version_id_provider_id', array(
             'name' => 'provider_version_id_provider_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'provider',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('city', 'city_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('city', 'city_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('client', 'client_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->addIndex('client', 'client_city_id', array(
             'fields' => 
             array(
              0 => 'city_id',
             ),
             ));
        $this->addIndex('client', 'client_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('client', 'client_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('comment', 'comment_event_id', array(
             'fields' => 
             array(
              0 => 'event_id',
             ),
             ));
        $this->addIndex('comment', 'comment_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('comment', 'comment_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('coupon', 'coupon_event_id', array(
             'fields' => 
             array(
              0 => 'event_id',
             ),
             ));
        $this->addIndex('coupon', 'coupon_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->addIndex('coupon', 'coupon_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('coupon', 'coupon_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('event', 'event_provider_id', array(
             'fields' => 
             array(
              0 => 'provider_id',
             ),
             ));
        $this->addIndex('event', 'event_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('event', 'event_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('faq', 'faq_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('faq', 'faq_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('file', 'file_provider_id', array(
             'fields' => 
             array(
              0 => 'provider_id',
             ),
             ));
        $this->addIndex('file', 'file_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('file', 'file_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('gallery', 'gallery_provider_id', array(
             'fields' => 
             array(
              0 => 'provider_id',
             ),
             ));
        $this->addIndex('gallery', 'gallery_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('gallery', 'gallery_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('image', 'image_gallery_id', array(
             'fields' => 
             array(
              0 => 'gallery_id',
             ),
             ));
        $this->addIndex('image', 'image_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('image', 'image_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('phone', 'phone_provider_id', array(
             'fields' => 
             array(
              0 => 'provider_id',
             ),
             ));
        $this->addIndex('phone', 'phone_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('phone', 'phone_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('provider', 'provider_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->addIndex('provider', 'provider_city_id', array(
             'fields' => 
             array(
              0 => 'city_id',
             ),
             ));
        $this->addIndex('provider', 'provider_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('provider', 'provider_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('ref_event_like', 'ref_event_like_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->addIndex('ref_event_like', 'ref_event_like_event_id', array(
             'fields' => 
             array(
              0 => 'event_id',
             ),
             ));
        $this->addIndex('city_version', 'city_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->addIndex('client_version', 'client_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->addIndex('comment_version', 'comment_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->addIndex('coupon_version', 'coupon_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->addIndex('event_version', 'event_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->addIndex('faq_version', 'faq_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->addIndex('file_version', 'file_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->addIndex('gallery_version', 'gallery_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->addIndex('image_version', 'image_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->addIndex('phone_version', 'phone_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->addIndex('provider_version', 'provider_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('city', 'city_created_by_sf_guard_user_id');
        $this->dropForeignKey('city', 'city_updated_by_sf_guard_user_id');
        $this->dropForeignKey('client', 'client_user_id_sf_guard_user_id');
        $this->dropForeignKey('client', 'client_city_id_city_id');
        $this->dropForeignKey('client', 'client_created_by_sf_guard_user_id');
        $this->dropForeignKey('client', 'client_updated_by_sf_guard_user_id');
        $this->dropForeignKey('comment', 'comment_event_id_event_id');
        $this->dropForeignKey('comment', 'comment_created_by_sf_guard_user_id');
        $this->dropForeignKey('comment', 'comment_updated_by_sf_guard_user_id');
        $this->dropForeignKey('coupon', 'coupon_event_id_event_id');
        $this->dropForeignKey('coupon', 'coupon_user_id_sf_guard_user_id');
        $this->dropForeignKey('coupon', 'coupon_created_by_sf_guard_user_id');
        $this->dropForeignKey('coupon', 'coupon_updated_by_sf_guard_user_id');
        $this->dropForeignKey('event', 'event_provider_id_provider_id');
        $this->dropForeignKey('event', 'event_created_by_sf_guard_user_id');
        $this->dropForeignKey('event', 'event_updated_by_sf_guard_user_id');
        $this->dropForeignKey('faq', 'faq_created_by_sf_guard_user_id');
        $this->dropForeignKey('faq', 'faq_updated_by_sf_guard_user_id');
        $this->dropForeignKey('file', 'file_provider_id_provider_id');
        $this->dropForeignKey('file', 'file_created_by_sf_guard_user_id');
        $this->dropForeignKey('file', 'file_updated_by_sf_guard_user_id');
        $this->dropForeignKey('gallery', 'gallery_provider_id_provider_id');
        $this->dropForeignKey('gallery', 'gallery_created_by_sf_guard_user_id');
        $this->dropForeignKey('gallery', 'gallery_updated_by_sf_guard_user_id');
        $this->dropForeignKey('image', 'image_gallery_id_gallery_id');
        $this->dropForeignKey('image', 'image_created_by_sf_guard_user_id');
        $this->dropForeignKey('image', 'image_updated_by_sf_guard_user_id');
        $this->dropForeignKey('phone', 'phone_provider_id_provider_id');
        $this->dropForeignKey('phone', 'phone_created_by_sf_guard_user_id');
        $this->dropForeignKey('phone', 'phone_updated_by_sf_guard_user_id');
        $this->dropForeignKey('provider', 'provider_user_id_sf_guard_user_id');
        $this->dropForeignKey('provider', 'provider_city_id_city_id');
        $this->dropForeignKey('provider', 'provider_created_by_sf_guard_user_id');
        $this->dropForeignKey('provider', 'provider_updated_by_sf_guard_user_id');
        $this->dropForeignKey('ref_event_like', 'ref_event_like_user_id_sf_guard_user_id');
        $this->dropForeignKey('ref_event_like', 'ref_event_like_event_id_event_id');
        $this->dropForeignKey('ref_event_like', 'ref_event_like_user_id_client_id');
        $this->dropForeignKey('city_version', 'city_version_id_city_id');
        $this->dropForeignKey('client_version', 'client_version_id_client_id');
        $this->dropForeignKey('comment_version', 'comment_version_id_comment_id');
        $this->dropForeignKey('coupon_version', 'coupon_version_id_coupon_id');
        $this->dropForeignKey('event_version', 'event_version_id_event_id');
        $this->dropForeignKey('faq_version', 'faq_version_id_faq_id');
        $this->dropForeignKey('file_version', 'file_version_id_file_id');
        $this->dropForeignKey('gallery_version', 'gallery_version_id_gallery_id');
        $this->dropForeignKey('image_version', 'image_version_id_image_id');
        $this->dropForeignKey('phone_version', 'phone_version_id_phone_id');
        $this->dropForeignKey('provider_version', 'provider_version_id_provider_id');
        $this->removeIndex('city', 'city_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('city', 'city_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('client', 'client_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->removeIndex('client', 'client_city_id', array(
             'fields' => 
             array(
              0 => 'city_id',
             ),
             ));
        $this->removeIndex('client', 'client_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('client', 'client_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('comment', 'comment_event_id', array(
             'fields' => 
             array(
              0 => 'event_id',
             ),
             ));
        $this->removeIndex('comment', 'comment_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('comment', 'comment_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('coupon', 'coupon_event_id', array(
             'fields' => 
             array(
              0 => 'event_id',
             ),
             ));
        $this->removeIndex('coupon', 'coupon_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->removeIndex('coupon', 'coupon_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('coupon', 'coupon_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('event', 'event_provider_id', array(
             'fields' => 
             array(
              0 => 'provider_id',
             ),
             ));
        $this->removeIndex('event', 'event_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('event', 'event_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('faq', 'faq_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('faq', 'faq_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('file', 'file_provider_id', array(
             'fields' => 
             array(
              0 => 'provider_id',
             ),
             ));
        $this->removeIndex('file', 'file_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('file', 'file_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('gallery', 'gallery_provider_id', array(
             'fields' => 
             array(
              0 => 'provider_id',
             ),
             ));
        $this->removeIndex('gallery', 'gallery_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('gallery', 'gallery_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('image', 'image_gallery_id', array(
             'fields' => 
             array(
              0 => 'gallery_id',
             ),
             ));
        $this->removeIndex('image', 'image_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('image', 'image_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('phone', 'phone_provider_id', array(
             'fields' => 
             array(
              0 => 'provider_id',
             ),
             ));
        $this->removeIndex('phone', 'phone_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('phone', 'phone_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('provider', 'provider_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->removeIndex('provider', 'provider_city_id', array(
             'fields' => 
             array(
              0 => 'city_id',
             ),
             ));
        $this->removeIndex('provider', 'provider_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('provider', 'provider_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('ref_event_like', 'ref_event_like_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->removeIndex('ref_event_like', 'ref_event_like_event_id', array(
             'fields' => 
             array(
              0 => 'event_id',
             ),
             ));
        $this->removeIndex('city_version', 'city_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->removeIndex('client_version', 'client_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->removeIndex('comment_version', 'comment_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->removeIndex('coupon_version', 'coupon_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->removeIndex('event_version', 'event_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->removeIndex('faq_version', 'faq_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->removeIndex('file_version', 'file_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->removeIndex('gallery_version', 'gallery_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->removeIndex('image_version', 'image_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->removeIndex('phone_version', 'phone_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->removeIndex('provider_version', 'provider_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
    }
}