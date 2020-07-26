from assertpy import assert_that
from counting_bits import count_bits


def test_correct_count():
    assert_that(count_bits(0)).is_equal_to(0)
    assert_that(count_bits(4)).is_equal_to(1)
    assert_that(count_bits(7)).is_equal_to(3)
    assert_that(count_bits(9)).is_equal_to(2)
    assert_that(count_bits(10)).is_equal_to(2)
    assert_that(count_bits(15)).is_equal_to(4)
    assert_that(count_bits(1234)).is_equal_to(5)
