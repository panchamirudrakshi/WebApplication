class Review < ActiveRecord::Base
  belongs_to :movie

  validates :comment, presence: true

end
