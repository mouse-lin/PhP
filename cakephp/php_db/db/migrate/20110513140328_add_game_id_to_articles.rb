class AddGameIdToArticles < ActiveRecord::Migration
  def self.up
    add_column :articles, :game_id, :integer
  end

  def self.down
    remove_column :articles, :game_id
  end
end
