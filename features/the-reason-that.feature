Feature: Web pages

  Scenario: the reason
    Given I am on homepage
    When I follow "the"
    Then I should see "the reason"