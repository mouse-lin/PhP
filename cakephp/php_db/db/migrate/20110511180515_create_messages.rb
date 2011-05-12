class CreateMessages< ActiveRecord::Migration
  def self.up
    create_table :messages do |t|
     t.string :content
     t.string :date_time
     t.string :new_type
     t.string :send_name
     t.integer :user_id

      t.timestamps
    end
  end

  def self.down
    drop_table :messages
  end

end
