class ReviewsController < ApplicationController
	def create
    	@movie = Movie.find(params[:movie_id])
    	@review = @movie.reviews.create(review_params)
    	if @review.errors.any?
  			render "movies/show"
		else
  			redirect_to movie_path(@movie)
		end    	
  	end

  	def destroy
    	@movie = Movie.find(params[:movie_id])
    	@review = @movie.reviews.find(params[:id])
    	@review.destroy
    	redirect_to movie_path(@movie)
  	end
 
  	private
    def review_params
      params.require(:review).permit(:reviewer, :comment)
    end
end
