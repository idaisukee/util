class MilTime < String
  def initialize(string)
    @string = string
    @s_hour= @string[0..1]
    @s_minute = @string[2..3]
  end
  def valid?
    if
        @string.int? and
        @string.size == 4
    then
      begin
        Time.new(1000, 10, 10, @s_hour.to_i, @s_minute.to_i)
        true
      rescue
        false
      end
    else
      false
    end
  end

  def to_s
    "#@string"
  end

  def to_t
    Time.new(1000, 10, 10, @s_hour.to_i, @s_minute.to_i)
  end


end

