class CreateGames < ActiveRecord::Migration
  def self.up
    create_table :games do |t|
      t.string  :image_url
      t.string  :name
      t.string  :introduce
      t.string  :game_type

      t.timestamps
    end
  end

  def self.down
    drop_table :games
  end
end
