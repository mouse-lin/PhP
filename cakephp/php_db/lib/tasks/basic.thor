class Basic < Thor
  desc "create_basic_data","创建基础数据!(注意*会统一删除原有数据*)"
  method_options :e => 'development'
  def create_basic_data
    load_environment
    delete_datas([Account])
    Account.create!([
      { :name => "mouse" }
    ])
    puts "----------- 创建基础数据成功! ------------"
  rescue ActiveRecord::RecordInvalid => error
    puts error.message
  end


  private 
  def delete_datas array_model = []
    array_model.each do |m|
      m.delete_all
    end
  end

  def load_environment
    ENV["RAILS_ENV"] = options[:e]
    require "./config/environment"  
  end

end
