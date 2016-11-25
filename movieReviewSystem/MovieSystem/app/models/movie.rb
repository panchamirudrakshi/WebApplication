class Movie < ActiveRecord::Base
	has_many :reviews, dependent: :destroy
	validates :title, presence: true
	validates :rating, numericality: { only_integer: true, :greater_than_or_equal_to => 1, :less_than_or_equal_to => 10 ,:message => " must be entered between 1 and 10" }
end
