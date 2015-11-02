# config valid only for current version of Capistrano
lock '3.4.0'

set :application, 'wechat-ipocket'
set :repo_url, 'https://github.com/zgs225/wechat-ipocket.git'
set :deploy_to, "/home/yuez/www/#{fetch(:application)}"

namespace :deploy do

  after :restart, :clear_cache do
    on roles(:web), in: :groups, limit: 3, wait: 10 do
      # Here we can do anything such as:
      # within release_path do
      #   execute :rake, 'cache:clear'
      # end
    end
  end

end
