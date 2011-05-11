class CreateUsers < ActiveRecord::Migration
  def self.up
    create_table :users do |t|
      t.string  :login
      t.string  :password
      t.string  :password_confirmation
      t.string  :name
      t.string  :email
      t.string  :phone
      t.string  :sex
      t.string  :address
      t.string  :img
      t.string  :qq
      t.string  :msn
      t.date    :birthday
      t.boolean  :online
      

      t.timestamps
    end
  end

  def self.down
    drop_table :users
  end
end
