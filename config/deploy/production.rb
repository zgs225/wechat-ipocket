server 'yuez.me', user: 'yuez', roles: %w{app web}

desc "Upload production environment"
task :put_env do
  on roles(:web) do
    upload! './.env.production', "#{release_path}/.env"
  end
end

before 'deploy:updated', :put_env
