#-*- encoding : utf-8 -*-
# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).
#
# Examples:
#
#   cities = City.create([{ :name => 'Chicago' }, { :name => 'Copenhagen' }])
#   Mayor.create(:name => 'Daley', :city => cities.first)
Game.delete_all
User.delete_all
Game.create([
  { :name =>" 星际争霸2", :image_url => "../img/games/hot_game/星级争霸2", :game_type => "hot_game",:introduce => "星级争霸十年在写辉煌"},
  { :name => "征途", :image_url => "../img/games/hot_game/征途", :game_type => "hot_game", :introduce => "巨人网络耗时3年精心打造的一款2D大型角色扮演类网络游戏" },
  { :name => "QQ仙境", :image_url => "../img/games/hot_game/QQ仙境", :game_type => "hot_game", :introduce => "让我们一起追随雷阿女神 向着白色城堡出发" },
  { :name => "魔兽世界", :image_url => "../img/games/hot_game/魔兽世界", :game_type => "hot_game", :introduce => "魔兽世界,让你体验不一样的世界！" },
  { :name => "寻仙", :image_url => "../img/games/hot_game/寻仙", :game_type => "hot_game", :introduce => "携刀剑之风，踏寻仙之路" },
  { :name => "诛仙2", :image_url => "../img/games/hot_game/诛仙2", :game_type => "hot_game", :introduce => "张小凡的故事将由你书写" },
  { :name => "地下城与勇士", :image_url => "../img/games/hot_game/地下城与勇士", :game_type => "hot_game", :introduce => "街机，格斗，打击感，判定……这就是DNF" },
  { :name => "新天下贰", :image_url => "../img/games/hot_game/新天下贰", :game_type => "hot_game", :introduce => "一起走进美丽的大荒世界~" },
  { :name => "倩女幽魂", :image_url => "../img/games/hot_game/倩女幽魂", :game_type => "hot_game", :introduce => "网易精心打造2.5D即时制仙侠网游巅峰巨作！" },
  { :name => "大唐无双", :image_url => "../img/games/expert_game/大唐无双", :game_type => "expert_game", :introduce => "最具操作性的2.5D写实PK网游！" },
  { :name => "轩辕传奇", :image_url => "../img/games/expert_game/轩辕传奇", :game_type => "expert_game", :introduce => "腾讯出品，上古史诗战争为核心的中式玄幻网游!" },
  { :name => "龙之谷", :image_url => "../img/games/expert_game/龙之谷", :game_type => "expert_game", :introduce => "无锁定操作、3D画面、激烈PVP，酣畅淋漓打击感…" },
  { :name => "武林外传", :image_url => "../img/games/expert_game/武林外传", :game_type => "expert_game", :introduce => "嘿！兄弟，我们好久不见你在哪里" },
  { :name => "梦幻诛仙", :image_url => "../img/games/expert_game/梦幻诛仙", :game_type => "expert_game", :introduce => "历时三年研发，进军2D市场！" },
  { :name => "鹿鼎记", :image_url => "../img/games/expert_game/鹿鼎记", :game_type => "expert_game", :introduce => "搜狐畅游超越天龙八部的游戏大作！" },
  { :name => "创世西游", :image_url => "../img/games/expert_game/创世西游", :game_type => "expert_game", :introduce => "网易西游三部曲，新章" },
  { :name => "天骄3", :image_url => "../img/games/expert_game/天骄3", :game_type => "expert_game", :introduce => "天骄系列，光宇华夏运营的3D国产玄幻网游~" },
  { :name => "最终幻想14", :image_url => "../img/games/expert_game/最终幻想14", :game_type => "expert_game", :introduce => "网络次世代，一个延续了十四代的最终幻想将展开！" },
  { :name => "永恒之塔", :image_url => "../img/games/expert_game/永恒之塔", :game_type => "expert_game", :introduce => "Ncsoft续天堂II之后的最强之作！" },
  { :name => "笑傲江湖", :image_url => "../img/games/expert_game/笑傲江湖", :game_type => "expert_game", :introduce => "完美耗巨资制作的一款国际武侠游戏！" },
  { :name => "星辰变", :image_url => "../img/games/expert_game/星辰变", :game_type => "expert_game", :introduce => "盛大2D次世代动作网游！" },
  { :name => "真三国无双", :image_url => "../img/games/other_game/真三国无双", :game_type => "other_game", :introduce => "在游戏世界中，每个玩家都是从新兵做起，通过不断的成长和锻炼，证明自己的实力。" },
  { :name => "口袋西游", :image_url => "../img/games/other_game/口袋西游", :game_type => "other_game", :introduce => "管你神魔妖怪，统统入我口袋！" },
  { :name => "极光世界", :image_url => "../img/games/other_game/极光世界", :game_type => "other_game", :introduce => "一款3D高清网游，公测震撼开启" },
  { :name => "突击风暴", :image_url => "../img/games/other_game/突击风暴", :game_type => "other_game", :introduce => "由盛大游戏在中国大陆地区运营的世界著名FPS大作！" },
  { :name => "三国杀", :image_url => "../img/games/other_game/三国杀", :game_type => "other_game", :introduce => "三国杀OL，一款风靡互联网的卡牌游戏" },
  { :name => "水煮江山", :image_url => "../img/games/other_game/水煮江山", :game_type => "other_game", :introduce => "不一样的江山，不一样的激情!" },
])
User.create([
  { :name => "林洪狮", :login => "mouseshi", :password => '000000', :password_confirmation => '000000', :sex => '男',:email => '910664586@qq.com'},
  { :name => "mouse", :login => "mouseshi2", :password => '000000', :password_confirmation => '000000', :sex => '男',:email => '9106645867@qq.com'},
])
