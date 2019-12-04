puts "Let's play a game!"
puts "Higher number wins."

end_game = false 

while end_game != true

	puts "Pick a number between 0 and 9"
	my_number = Random.rand(10)

	your_number = gets.chomp

	if not your_number.to_s =~ /\d+/
	puts "Invalid entry. You must enter a number. Your number must be a number between 0 and 9"
	end

	your_number = your_number.to_i
	#puts "my_number #{my_number}"

	if your_number > 9 || your_number < 0
		puts "Invalid number #{your_number}. Your number must be between 0 and 9"
	elsif my_number == your_number
		puts "It's a tie! Play again?"
	elsif my_number < your_number
		puts "You cheated! Play again."
	elsif your_number < my_number
		puts "I won! Bye now."
		exit
	end


end # while
