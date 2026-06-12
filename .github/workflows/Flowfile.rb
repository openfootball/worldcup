
step [:sync, :clone, :setup, :up] do
  [
    'worldcup.json@openfootball',
  ].each do |repo|
    Mono.sync( repo )
  end
end


########################
#  publish   (that is, commit & push if any changes)
step [:publish, :pub, :push] do
  ## todo/fix: get utc date - possible?
  today = Date.today
  msg  = "auto-gen - week #{today.cweek}/#{today.cwday}"

  [
    'worldcup.json@openfootball',
  ].each do |repo|
    Mono.open( repo ) do |proj|
      puts "check for changes (to commit & push) in >#{Dir.pwd}<:"
      if proj.changes?
        proj.add( '.' )
        proj.commit( msg )
        proj.push
      else
        puts "  - no changes -"
      end
    end
  end
end



#################
#  more
#
# step [:gen_json, :json] do
#  gen_json
# end
