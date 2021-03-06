<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_stack', language 'de', branch 'MOODLE_35_STABLE'
 *
 * @package   qtype_stack
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanothernode'] = 'Weiteren Knoten hinzufügen';
$string['addanothertestcase'] = 'Weiteren Testfall hinzufügen...';
$string['addatestcase'] = 'Testfall hinzufügen...';
$string['addingatestcase'] = 'Füge Testfall zu Frage {$a} hinzu';
$string['alg_indices_fact'] = 'Die folgenden Gesetze regeln das Rechnen mit Potenzen:
\\[a^ma^n = a^{m+n}\\]
\\[\\frac{a^m}{a^n} = a^{m-n}\\]
\\[(a^m)^n = a^{mn}\\]
\\[a^0 = 1\\]
\\[a^{-m} = \\frac{1}{a^m}\\]
\\[a^{\\frac{1}{n}} = \\sqrt[n]{a}\\]
\\[a^{\\frac{m}{n}} = \\left(\\sqrt[n]{a}\\right)^m\\]';
$string['alg_indices_name'] = 'Potenzgesetze';
$string['alg_inequalities_fact'] = '[a>b hbox{ bedeutet } a hbox{ ist größer als } b] <br /> [ a < b hbox{ bedeutet } a hbox{ ist kleiner als } b] <br /> [ageq b hbox{ bedeutet } a hbox{ ist größer als oder gleich } b] <br /> [aleq b hbox{ bedeutet } a hbox{ ist kleiner als oder gleich } b]';
$string['alg_inequalities_name'] = 'Ungleichungen';
$string['alg_logarithms_fact'] = 'Für jede Basis \\(c>0\\) mit \\(c \\neq 1\\) gilt:
\\[\\log_c(a) = b \\mbox{, bedeutet} a = c^b\\]
\\[\\log_c(a) + \\log_c(b) = \\log_c(ab)\\]
\\[\\log_c(a) - \\log_c(b) = \\log_c\\left(\\frac{a}{c}\\right)\\]
\\[n\\log_c(a) = \\log_c\\left(a^n\\right)\\]
\\[\\log_c(1) = 0\\]
\\[\\log_c(b) = 1\\]
Die Formel für einen Basiswechsel lautet:
\\[\\log_a(x) = \\frac{\\log_b(x)}{\\log_b(a)}\\]
Logarithmen zur Basis \\(e\\), bezeichnet mit \\(\\log_e\\) oder auch \\(\\ln\\), nennt man natürliche Logarithmen. Der Buchstabe \\(e\\) bezeichnet die Exponentialkonstante; diese ist ungefähr \\(2.718\\).';
$string['alg_logarithms_name'] = 'Die Rechenregeln für Logarithmen';
$string['alg_partial_fractions_name'] = 'Partialbruchzerlegung';
$string['alg_quadratic_formula_fact'] = 'Liegt eine quadratische Gleichung der Form
\\[ax^2 + bx + c = 0\\]
vor, so ist die Lösung/sind die Lösungen dieser Gleichung geben durch die quadratische Lösungsformel:
\\[x = \\frac{-b \\pm \\sqrt{b^2 - 4ac}}{2a}.\\]';
$string['alg_quadratic_formula_name'] = 'Die Lösungsformel für quadratische Gleichungen';
$string['all'] = 'Alles';
$string['allnodefeedbackmustusethesameformat'] = 'Alle Rückmeldungen für alle Knoten in einem Rückmeldebaum (PRT) müssen dasselbe Textformat verwenden.';
$string['allowwords'] = 'Erlaubte Wörter';
$string['allowwords_help'] = 'Standardmäßig sind Namen von Funktionen oder Variablen von mehr als zwei Zeichen Länge nicht erlaubt. Dieses ist eine durch Kommata getrennte Liste von Namen von Funktionen oder Variablen, die in der Antwort des Studierenden erlaubt sind.';
$string['alreadydeployed'] = 'Eine Variante, die diesem Aufgabenhinweis entspricht, wurde bereits eingesetzt.';
$string['answernote'] = 'Antworthinweis';
$string['answernotedefaultfalse'] = '{$a->prtname}-{$a->nodename}-F';
$string['answernotedefaulttrue'] = '{$a->prtname}-{$a->nodename}-T';
$string['answernote_err'] = 'Antworthinweise dürfen nicht das Zeichen | enthalten. Dieses Zeichen wird von STACK später eingefügt, um die Antworthinweise automatisch zu trennen.';
$string['answernote_help'] = 'Dieses Tag dient zur Berichterstattung. Es bestimmt den eindeutigen Pfad durch den Baum und das Ergebnis jeder Antwort. Es wird automatisch erzeugt, kann aber auch manuell zu etwas Sinnvollem geändert werden.';
$string['answernote_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Potential_response_trees.md#Answer_note';
$string['answernoterequired'] = 'Antworthinweis darf nicht leer sein.';
$string['answernoteunique'] = 'Doppelte Antwortknoten im Antwortbaum erkannt.';
$string['answertest'] = 'Antwortüberprüfung';
$string['answertest_help'] = 'Eine Antwortüberprüfung ist ein Test um zwei Ausdrücke dahingehend zu vergleichen, ob sie bestimmte mathematische Eigenschaften erfüllen.';
$string['answertest_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_tests.md';
$string['assumepositive'] = 'Positivitätsannahme';
$string['assumepositive_help'] = 'Diese Option setzt Maxima\'s assume_pos Variable.';
$string['assumepositive_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#Assume_Positive';
$string['assumereal'] = 'Realannahme';
$string['assumereal_help'] = 'Diese Option setzt die assume_real Variable.';
$string['ATAlgEquiv_SA_not_equation'] = 'Ihre Anwort sollte eine Gleichung sein, ist es aber nicht.';
$string['ATAlgEquiv_SA_not_expression'] = 'Ihre Antwort sollte ein Ausdruck und keine Gleichung/Ungleichung/Liste/Menge/Matrix sein.';
$string['ATAlgEquiv_SA_not_function'] = 'Ihre Antwort sollte eine Funktion sein, die durch den Operator <tt>:=</tt> definiert wird. Sie ist es aber nicht.';
$string['ATAlgEquiv_SA_not_inequality'] = 'Ihre Anwort sollte eine Ungleichung sein, ist es aber nicht.';
$string['ATAlgEquiv_SA_not_list'] = 'Ihre Antwort sollte eine Liste sein, ist es aber nicht. Beachten Sie die Syntax: In einer Liste wird die Auflistung der Elemente (jeweils durch Kommata getrennt) mit geschweiften Klammern eingeschlossen.';
$string['ATAlgEquiv_SA_not_logic'] = 'Ihre Antwort sollte eine Gleichung oder Ungleichung sein, oder eine logische Kombination aus solchen. Sie ist es aber nicht.';
$string['ATAlgEquiv_SA_not_matrix'] = 'Ihre Anwort sollte eine Matrix sein, ist es aber nicht.';
$string['ATAlgEquiv_SA_not_set'] = 'Ihre Antwort sollte eine Menge sein, ist es aber nicht. Beachten Sie die Syntax: In einer Menge wird die Auflistung der Elemente (jeweils durch Kommata getrennt) mit geschweiften Klammern eingeschlossen.';
$string['ATAlgEquiv_SA_not_string'] = 'Ihre Antwort sollte eine Zeichenfolge sein, ist es aber nicht.';
$string['ATAlgEquiv_TA_not_equation'] = 'Ihre Antwort ist eine Gleichung, aber der Ausdruck, mit dem verglichen wird, ist es nicht. Vielleicht haben Sie etwas wie "y=2*x+1" getippt, aber es sollte nur "2*x+1" eingegeben werden.';
$string['ATCompSquare_false'] = '';
$string['ATCompSquare_false_no_summands'] = 'Das vollständige Quadrat ist von der Form ( a(cdotscdots)^2 + b) wobei (a) und (b) nicht von ihrer Variablen abhängen. Mehr als eine Ihrer Summanden scheint von der Variablen aus ihrer Antwort abzuhängen.';
$string['ATCompSquare_not_AlgEquiv'] = 'Ihre Antwort scheint in der richtigen Form zu sein, ist aber nicht äquivalent zur korrekten Antwort.';
$string['ATCompSquare_SA_not_depend_var'] = 'Ihre Antwort sollte von der Variable {$a->m0} abhängen, was sie nicht tut.';
$string['ATCompSquare_true'] = '';
$string['ATDiff_error_list'] = 'Die Antwortüberprüfung ist fehlgeschlagen. Bitte konktaktieren Sie ihren Administrator.';
$string['ATDiff_int'] = 'Vermutlich haben Sie stattdessen integriert!';
$string['ATFacForm_error_degreeSA'] = 'Das CAS konnte den algebraischen Grad Ihrer Antwort nicht ermitteln.';
$string['ATFacForm_error_list'] = 'Die Antwortüberprüfung ist fehlgeschlagen. Bitte konktaktieren Sie Ihren Administrator.';
$string['ATFacForm_isfactored'] = 'Ihre Anwort ist faktorisiert. Gut gemacht!.';
$string['ATFacForm_notalgequiv'] = 'Ihre Antwort ist nicht algebraisch äquivalent zur korrekten Antwort. Sie haben etwas falsch gemacht.';
$string['ATFacForm_notfactored'] = 'Ihre Antwort ist nicht faktorisiert.';
$string['ATInequality_backwards'] = 'Ihre Ungleichung ist falschherum.';
$string['ATInequality_nonstrict'] = 'Ihre Ungleichung sollte strikt/streng sein!';
$string['ATInequality_strict'] = 'Ihre Ungleichung sollte nicht strikt/streng sein!';
$string['ATInt_const'] = 'Sie müssen eine Konstante bei der Stammfunktion angeben. Ansonsten sieht alles richtig aus. Gut gemacht!';
$string['ATInt_const_int'] = 'Sie müssen eine Konstante bei der Stammfunktion angeben. Dies sollte eine beliebige Konstante sein und kein fester Wert.';
$string['ATInt_diff'] = 'Vermutlich haben Sie stattdessen abgeleitet!';
$string['ATInt_EqFormalDiff'] = 'Die formale Ableitung Ihrer Antwort stimmt mit den Ausdruck überein, den Sie laut Aufgabenstellung integrieren sollten. Allerdings weicht Ihre Antwort signifikant von der richtigen Antwort ab (d.h. nicht nur eine unterschiedliche Konstante). Bitte fragen Sie bei ihrem Kursleiter nach.';
$string['ATInt_error_list'] = 'Die Antwortüberprüfung ist fehlgeschlagen. Bitte konktaktieren Sie ihren Systemadministrator.';
$string['ATInt_generic'] = 'Die formale Ableitung Ihrer Antwort sollte mit dem Ausdruck übereinstimmen, den Sie laut Aufgabenstellung integrieren sollten: Also {$a->m0}. Aber die Ableitung Ihrer Antwort nach {$a->m1} ist: {$a->m2}. Daher haben Sie etwas falsch gemacht!';
$string['ATInt_weirdconst'] = 'Die formale Ableitung Ihrer Antwort stimmt mit dem Ausdruck überein, den Sie laut Aufgabenstellung integrieren sollten. Die Integrationskonstante ist allerdings seltsam. Bitte fragen Sie Ihren Kursleiter.';
$string['AT_InvalidOptions'] = 'Das Optionsfeld ist ungültig. {$a->errors}';
$string['ATList_wrongentries'] = 'Die rot unterstrichenen Einträge sind falsch. {$a->m0}';
$string['ATList_wronglen'] = 'Ihre Liste sollte {$a->m0} Elemente enthalten, sie hat aber {$a->m1}.';
$string['ATLowestTerms_entries'] = 'Die folgenden Ausdrücke sind nicht vollständig gekürzt. {$a->m0} Bitte versuchen Sie es noch einmal.';
$string['ATLowestTerms_not_rat'] = 'Sie müssen folgendes aus dem Nenner Ihres Bruches entfernen: {$a->m0}';
$string['ATLowestTerms_wrong'] = 'Sie müssen die Brüche in Ihrer Antwort eliminieren.';
$string['ATMatrix_wrongentries'] = 'Die rot unterstrichenen Einträge sind falsch. {$a->m0}';
$string['ATMatrix_wrongsz'] = 'Ihre Matrix sollte die Größe {$a->m0} x {$a->m1} haben, sie ist aber vom Typ {$a->m2} x {$a->m3}.';
$string['AT_MissingOptions'] = 'Fehlende Option bei der Antwortüberprüfung.';
$string['AT_NOTIMPLEMENTED'] = 'Diese Antwortüberprüfung ist noch nicht implementiert.';
$string['ATNumDecPlaces_NoDP'] = 'Ihre Antwort sollte eine Dezimalzahl mit einem Dezimalpunkt sein.';
$string['ATNumerical_SA_not_list'] = 'Ihre Antwort sollte eine Liste sein, ist es aber nicht. Beachten Sie die Syntax: In einer Liste wird die Auflistung der Elemente (jeweils durch Kommata getrennt) mit geschweiften Klammern eingeschlossen.';
$string['ATNumerical_SA_not_number'] = 'Ihre Antwort sollte eine Dezimalzahl sein, ist es aber nicht.';
$string['ATNumerical_SA_not_set'] = 'Ihre Antwort sollte eine Menge sein, ist es aber nicht. Beachten Sie die Syntax: In einer Menge wird die Auflistung der Elemente (jeweils durch Kommata getrennt) mit geschweiften Klammern eingeschlossen.';
$string['ATNumSigFigs_error_list'] = 'Die Antwortüberprüfung ist fehlgeschlagen. Bitte konktaktieren Sie Ihren Administrator.';
$string['ATNumSigFigs_Inaccurate'] = 'Die Genauigkeit Ihrer Antwort ist nicht korrekt. Entweder haben Sie das Endergebnis oder einen Zwischenwert falsch gerundet.';
$string['ATNumSigFigs_NotDecimal'] = 'Ihre Antwort sollte eine Dezimalzahl sein; ist sie aber nicht!';
$string['ATNumSigFigs_WrongDigits'] = 'Ihre Antwort hat die falsche Anzahl an Dezimalstellen.';
$string['ATNumSigFigs_WrongSign'] = 'Ihre Antwort hat das falsche Vorzeichen.';
$string['ATPartFrac_denom_ret'] = 'Schreibt man Ihre Antwort als einen einzelnen Bruch, so lautet der Nenner: {$a->m0}. Allerdings wäre {$a->m1} richtig.';
$string['ATPartFrac_diff_variables'] = 'Verwenden Sie in Ihrer Antwort die Variablen aus der Aufgabenstellung!';
$string['ATPartFrac_error_list'] = 'Die Antwortüberprüfung ist fehlgeschlagen. Bitte konktaktieren Sie Ihren Administrator.';
$string['ATPartFrac_ret_expression'] = 'Ihre Antwort als einzelner Bruch lautet: {$a->m0}';
$string['ATPartFrac_single_fraction'] = 'Ihre Antwort ist ein einzelner Bruch, es muss aber ein partieller Bruch sein.';
$string['ATPartFrac_true'] = '';
$string['ATRegEx_missing_option'] = 'Fehlender regulärer Ausdruck im CAS Optionsfeld.';
$string['ATSets_duplicates'] = 'Ihre Menge scheint doppelte Einträge zu enthalten!';
$string['ATSets_missingentries'] = 'Folgendes fehlt in Ihrer Menge. {$a->m0}';
$string['ATSets_SA_not_set'] = 'Ihre Antwort sollte eine Menge sein, ist es aber nicht. Beachten Sie die Syntax: In einer Menge wird die Auflistung der Elemente (jeweils durch Kommata getrennt) mit geschweiften Klammern eingeschlossen.';
$string['ATSets_SB_not_set'] = 'Der Antworttest "Mengen" erwartet als ein zweites Argument eine Menge. Dies ist ein Fehler. Bitte kontaktieren Sie Ihre/n Trainer/in.';
$string['ATSets_wrongentries'] = 'Diese Eingaben sollen nicht Elemente Ihrer Menge sein. {$a->m0}';
$string['ATSet_wrongentries'] = 'Die folgenden Einträge sind falsch, auch wenn sie in einer vereinfachten Form (im Vergleich zu Ihrer Eingabe) erscheinen. {$a->m0}';
$string['ATSet_wrongsz'] = 'Ihre Menge sollte {$a->m0} verschiedene Elemente enthalten, sie hat aber {$a->m1} Elemente.';
$string['ATSingleFrac_div'] = 'Ihre Antwort enthält Brüche innerhalb von Brüchen. Bitte vereinfachen Sie dies zu einem einzelnen Bruch.';
$string['ATSingleFrac_error_list'] = 'Die Antwortüberprüfung ist fehlgeschlagen. Bitte konktaktieren Sie Ihren Administrator.';
$string['ATSingleFrac_part'] = 'Ihre Antwort muss ein einzelner Bruch der Form ( {a}over{b} ) sein.';
$string['ATSingleFrac_ret_exp'] = 'Ihre Antwort ist nicht algebraisch äquivalent zur korrekten Antwort. Sie haben etwas falsch gemacht.';
$string['ATSingleFrac_true'] = '';
$string['ATSingleFrac_var'] = 'Verwenden Sie in Ihrer Antwort die Variablen aus der Aufgabenstellung!';
$string['ATSysEquiv_SA_extra_variables'] = 'Ihre Antwort enthält zu viele Variablen!';
$string['ATSysEquiv_SA_missing_variables'] = 'In ihre Antwort fehlen eine oder mehrere Variablen!';
$string['ATSysEquiv_SA_not_eq_list'] = 'Ihre Antwort sollte eine Liste von Gleichungen sein; ist sie aber nicht!';
$string['ATSysEquiv_SA_not_list'] = 'Ihre Antwort sollte eine Liste sein; ist sie aber nicht!';
$string['ATSysEquiv_SA_not_poly_eq_list'] = 'Eine oder mehrere Gleichungen sind keine Polynomgleichungen!';
$string['ATSysEquiv_SA_system_overdetermined'] = 'Die rot unterstrichenen Einträge sind falsch. {$a->m0}';
$string['ATSysEquiv_SA_system_underdetermined'] = 'Die Gleichungen in Ihrem System scheinen korrekt zu sein, allerdings fehlen noch weitere.';
$string['ATSysEquiv_SB_not_eq_list'] = 'Die Antwort des/der Trainers/in ist keine Liste von Gleichungen';
$string['ATSysEquiv_SB_not_list'] = 'Die Antwort des Trainer/in ist keine Liste. Bitte kontaktieren Sie Ihre/n Trainer/in.';
$string['ATSysEquiv_SB_not_poly_eq_list'] = 'Die Antwort des/der Kursleiters/in sollte eine Liste von Polynomialgleichungen sein; ist sie aber nicht. Bitte kontaktiere Sie Ihre/n Trainer/in.';
$string['ATUnits_compatible_units'] = 'Ihre Einheiten unterscheiden sich von denen ihrer/s Dozierenden, sind aber mit ihnen kompatibel. Numerische Werte werden zum Vergleich in SI-Basiseinheiten konvertiert.';
$string['ATUnits_correct_numerical'] = 'Bitte überprüfen Sie Ihre Einheiten sorgfältig.';
$string['ATUnits_incompatible_units'] = 'Ihre Einheiten sind nicht mit den verwendeten Einheiten ihrer/s Dozierenden kompatibel.';
$string['ATUnits_SA_bad_units'] = 'Ihre Antwort muss Einheiten enthalten, und Sie müssen die Einheiten mit Multiplikationen an einen Wert anhängen, z.B. <code>3.2*m/s</code>.';
$string['ATUnits_SA_excess_units'] = 'Ihre Antwort verwendet Einheiten (oder Variablen), sollte dies jedoch nicht.';
$string['ATUnits_SA_not_expression'] = 'Ihre Antwort muss eine Zahl mit Einheiten sein. Verwenden Sie keine Mengen, Listen, Gleichungen oder Matrizen.';
$string['ATUnits_SA_no_units'] = 'Ihre Antwort muss Einheiten beinhalten.';
$string['ATUnits_SA_only_units'] = 'Ihre Antwort muss eine Zahl zusammen mit Einheiten sein. Ihre Antwort hat nur Einheiten.';
$string['autosimplify'] = 'Auto-Vereinfachung';
$string['autosimplify_help'] = 'Setzt die Variable "simp" in Maxima für diesen potenziellen Rückmeldungsbaum.';
$string['autosimplify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Maxima.md#Simplification';
$string['autosimplifyprt'] = '';
$string['booleangotunrecognisedvalue'] = 'Ungültige Eingabe.';
$string['boxsize'] = 'Größe der Eingabebox';
$string['boxsize_help'] = 'Breite der HTML-Eingabebox.';
$string['boxsize_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Box_Size';
$string['branchfeedback'] = 'Knotenzweig Feedback';
$string['branchfeedback_help'] = 'Dieser CASText kann die Aufgabenvariablen, die Eingabeelemente oder andere Feedbackvariablen verwenden. Er wird ausgewertet und angezeigt, sobald ein Studierender diesen Zweig erreicht.';
$string['bulktestcontinuefromhere'] = 'Erneut ausführen, oder von hier an fortsetzen';
$string['bulktestindexintro'] = 'Wenn Sie auf einen der Links klicken, werden alle Fragetests in allen STACK-Fragen in diesem Kontext ausgeführt';
$string['bulktestindexintro_desc'] = 'Das <a href="{$a->link}">Frage-Tests in Bulk-Skript ausführen</a> lässt Sie problemlos alle STACK-Fragen in einem bestimmten Kontext ausführen. Dies testet nicht nur die Fragen. Es ist darüberhinaus auch eine gute Art, den CAS-Cache nach dem Löschen erneut zu befüllen.';
$string['bulktestindextitle'] = 'Frage-Tests in Bulk-Skript ausführen';
$string['bulktestnogeneralfeedback'] = 'Diese Frage hat kein allgemeines Feedback.';
$string['bulktestnotests'] = 'Diese Frage hat keine Tests.';
$string['bulktestrun'] = 'Alle Fragetests für alle Fragen im System ausführen (langsam, nur für Administratoren)';
$string['bulktesttitle'] = 'Alle Fragetests in {$a} ausführen';
$string['calc_chain_rule_name'] = 'Die Kettenregel';
$string['calc_diff_linearity_rule_fact'] = '\\[{{\\rm d}\\,\\over {\\rm d}x}\\big(af(x)+bg(x)\\big)=a{{\\rm d}f(x)\\over {\\rm d}x}+b{{\\rm d}g(x)\\over {\\rm d}x}\\quad a,b {\\rm\\  constant.}\\]';
$string['calc_diff_linearity_rule_name'] = 'Die Linearität der Ableitung';
$string['calc_diff_standard_derivatives_name'] = 'Standardableitungen';
$string['calc_int_linearity_rule_fact'] = '[int left(af(x)+bg(x)right){rm d}x = aint!!f(x),{rm d}x ,+,bint !!g(x),{rm d}x, quad (a,b , , {rm constant}) ]';
$string['calc_int_linearity_rule_name'] = 'Die Linearität des Integrals';
$string['calc_int_methods_parts_fact'] = '[ int_a^b u{{rm d}vover {rm d}x}{rm d}x=left[uvright]_a^b- int_a^b{{rm d}uover {rm d}x}v,{rm d}x ] Oder alternativ: [int_a^bf(x)g(x),{rm d}x=left[f(x),int g(x){rm d}xright]_a^b -int_a^b{{rm d}fover {rm d}x}left{int g(x){rm d}xright}{rm d}x ]';
$string['calc_int_methods_parts_name'] = 'Partielle Integration';
$string['calc_int_methods_substitution_fact'] = '[ int f(u){{rm d}uover {rm d}x}{rm d}x=int f(u){rm d}u quadhbox{and}quad int_a^bf(u){{rm d}uover {rm d}x},{rm d}x = int_{u(a)}^{u(b)}f(u){rm d}u ]';
$string['calc_int_methods_substitution_name'] = 'Integration durch Substitution';
$string['calc_int_standard_integrals_fact'] = '[int k dx = kx +c, mbox{ wobei k eine Konstante ist.}] [int x^n dx = frac{x^{n+1}}{n+1}+c, quad (nne -1)] [int x^{-1} dx = int {frac{1}{x}} dx = ln(|x|)+c = ln(k*|x|) = left{matrix{ln(x)+c & x>0cr ln(-x)+c & x<0cr}right.] <center> <table> <tr><th>(f(x))</th><th> (int f(x) dx)</th></tr> <tr><td>(e^x) </td> <td> (e^x+c)</td> <td> </td> </tr> <tr><td>(cos(x)) </td> <td> (sin(x)+c) </td> <td> </td> </tr> <tr><td>(sin(x)) </td> <td> (-cos(x)+c) </td> <td> </td> </tr> <tr><td>(tan(x)) </td> <td> (ln(sec(x))+c) </td> <td>(-frac{pi}{2} < x < frac{pi}{2})</td> </tr> <tr><td>(sec x) </td> <td> (ln (sec(x)+tan(x))+c) </td> <td> ( -{piover 2}< x < {piover 2})</td> </tr> <tr><td>cosec(, x) </td> <td> (ln ($cosec$(x)-cot(x))+c) </td> <td>(0 < x < pi)</td> </tr> <tr><td>cot(,x) </td> <td> (ln(sin(x))+c) </td> <td> (0< x< pi) </td> </tr> <tr><td>(cosh(x)) </td> <td> (sinh(x)+c)</td> <td></td> </tr> <tr><td>(sinh(x)) </td> <td> (cosh(x) + c) </td> <td> </td> </tr> <tr><td>(tanh(x)) </td> <td> (ln(cosh(x))+c)</td> <td> </td> </tr> <tr><td>coth((x)) </td> <td> (ln(sinh(x))+c )</td> <td> (x>0)</td> </tr> <tr><td>({1over x^2+a^2}) </td> <td> ({1over a}tan^{-1}{xover a}+c)</td> <td> (a>0)</td> </tr> <tr><td>({1over x^2-a^2}) </td> <td> ({1over 2a}ln{x-aover x+a}+c) </td> <td> (|x|>a>0)</td> </tr> <tr><td>({1over a^2-x^2}) </td> <td> ({1over 2a}ln{a+xover a-x}+c) </td> <td> (|x|<a)</td> </tr> <tr><td>({1over sqrt{x^2+a^2}}) </td> <td> (sinh^{-1}left(frac{x}{a}right) + c) </td> <td> (a>0) </td> </tr> <tr><td>({1over sqrt{x^2-a^2}}) </td> <td> (cosh^{-1}left(frac{x}{a}right) + c) </td> <td> (xgeq a > 0) </td> </tr> <tr><td>({1over sqrt{x^2+k}}) </td> <td> (ln (x+sqrt{x^2+k})+c)</td> <td> </td> </tr> <tr><td>({1over sqrt{a^2-x^2}}) </td> <td> (sin^{-1}left(frac{x}{a}right)+c)</td> <td> (-aleq xleq a) </td> </tr> </table></center>';
$string['calc_int_standard_integrals_name'] = 'Standardintegrale';
$string['calc_product_rule_name'] = 'Die Produktregel';
$string['calc_quotient_rule_name'] = 'Die Quotientenregel';
$string['calc_rules_name'] = 'Rechenregeln';
$string['casdisplay'] = 'CAS Anzeige';
$string['cassuitecolerrors'] = 'CAS Fehler';
$string['castext'] = 'CAS Text';
$string['casvalid'] = 'V2';
$string['casvalidatemismatch'] = '[CAS validate mismatch]';
$string['casvalue'] = 'CAS Wert';
$string['chat'] = 'Sende zum CAS';
$string['chat_desc'] = 'Das <a href="{$a->link}">CAS Chat Skript</a> erlaubt es die Verbindung zum CAS zu testen, und die Maxima Syntax auszuprobieren.';
$string['chatintro'] = 'Diese Seite aktiviert die direkte Auswertung von CAS Text. Dieses einfache Skript dient als Minimalbeispiel und erlaubt das CAS und die verschiedenen Eingabeformate zu testen.';
$string['chattitle'] = 'Teste die Verbindung zum CAS';
$string['checkanswertype'] = 'Überprüfung der Antworttypen';
$string['checkanswertype_help'] = 'Falls ja, werden Antworten mit verschiedenen Typen (Term, Gleichung, Matrix, Liste, Menge), als ungültig verworfen.';
$string['checkanswertype_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Check_Type';
$string['clearedthecache'] = 'CAS Caches sind gelöscht worden.';
$string['clearingthecache'] = 'CAS Cache wird gelöscht';
$string['clearthecache'] = 'Cache löschen';
$string['completetestcase'] = 'Füllen Sie den Rest des Formulars aus, um einen Testfall zu erstellen';
$string['complexno'] = 'Bedeutung und Anzeige von sqrt(-1)';
$string['complexno_help'] = 'Steuert die Bedeutung und Anzeige des Symbols i und sqrt(-1)';
$string['complexno_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#sqrt_minus_one.';
$string['createtestcase'] = 'Testfall erstellen';
$string['currentlyselectedvariant'] = 'Dies ist die unten gezeigte Variante';
$string['ddl_empty'] = 'Es wurden keine Auswahlmöglichkeiten für dieses DropDown-Feld angegeben. Bitte geben sie welche ein (a,b,c,d)';
$string['ddl_nocorrectanswersupplied'] = 'Die/der Trainer/in hat nicht mindestens eine richtige Antwort angegeben.';
$string['debuginfo'] = 'Debug-Informationen';
$string['defaultmarkzeroifnoprts'] = 'Die Standardbewertung muss 0 sein wenn diese Frage keinen Rückmeldebaum (PRT) hat.';
$string['defaultprtcorrectfeedback'] = 'Richtige Antwort, gut gemacht!';
$string['defaultprtincorrectfeedback'] = 'Falsche Antwort.';
$string['defaultprtpartiallycorrectfeedback'] = 'Ihre Antwort ist teilweise korrekt.';
$string['deletetestcase'] = 'Lösche Testfall {$a->no} für Frage {$a->question}';
$string['deletetestcaseareyousure'] = 'Sind Sie sicher, dass Sie den Testfall {$a->no} für die Frage {$a->question} löschen möchten?';
$string['deletethistestcase'] = 'Lösche diesen Testfall...';
$string['deploy'] = 'Einsetzen';
$string['deployedprogress'] = 'Varianten einsetzten';
$string['deployedvariants'] = 'Eingesetzte Varianten';
$string['deployedvariantsn'] = 'Eingesetzte Varianten ({$a})';
$string['deploymany'] = 'Versuche, automatisch die folgende Anzahl von Varianten einzusetzen:';
$string['deploymanyerror'] = 'Fehler in der Benutzereingabe: Kann "{$a->err}" Variante nicht einsetzen.';
$string['deploymanynonew'] = 'Zu viele wiederholt vorhandene Aufgabenhinweise wurden generiert.';
$string['deploymanynotes'] = 'Beachten Sie, dass STACK aufgibt, wenn es 10 fehlgeschlagene Versuche gibt, einen neuen Aufgabenhinweis zu generieren, oder wenn ein Fragetest fehlschlägt.';
$string['deploymanysuccess'] = 'Anzahl der neuen Varianten, die erfolgreich erstellt, getestet und eingesetzt worden sind: {$a->no}.';
$string['deployoutoftime'] = 'Zeitlimit ungefähr um {$a->time} Sekunden überschritten. Bitte noch einmal versuchen, mehr einzusetzen.';
$string['deployremoveall'] = 'Einsatz aller Varianten zurücknehmen:';
$string['deploytestall'] = 'Alle Tests für alle eingesetzten Varianten durchführen (langsam):';
$string['deploytoomanyerror'] = 'STACK wird versuchen, in jedem Aufruf bis zu 100 neue Varianten einzusetzen. Keine neuen Varianten eingesetzt.';
$string['dropdowngotunrecognisedvalue'] = 'Ungültige Eingabe.';
$string['editingtestcase'] = 'Bearbeite Testfall {$a->no} für Frage {$a->question}';
$string['editthistestcase'] = 'Bearbeite diesen Testfall...';
$string['errors'] = 'Fehler';
$string['exceptionmessage'] = '{$a}';
$string['expectedanswernote'] = 'Erwarteter Antworthinweis';
$string['expectedoutcomes'] = 'Erwartete Ergebnisse';
$string['expectedpenalty'] = 'Erwartete Abzüge';
$string['expectedscore'] = 'Erwartete Punkte';
$string['exportthisquestion'] = 'Diese Frage exportieren';
$string['exportthisquestion_help'] = 'Dies wird eine Moodle-XML-Exportdatei erstellen, die nur diese eine Frage enthält. Ein Beispiel dafür, wann dies nützlich ist, ist, wenn Sie glauben, dass diese Frage einen Fehler in STACK aufzeigt, den Sie den Entwicklern melden möchten.';
$string['FacForm_UnPick_intfac'] = 'Sie müssen noch einen gemeinsamen Faktor ausklammern.';
$string['FacForm_UnPick_morework'] = 'Sie könnten noch etwas an dem Term {$a->m0} arbeiten.';
$string['false'] = 'Falsch';
$string['falsebranch'] = 'FALSCH-Zweig';
$string['falsebranch_help'] = 'Diese Felder kontrollieren was passiert, wenn die Antwortüberprüfung negativ ausfällt
### Mod und Punkte
Wie die Bepunktung angepasst wird. "=" setzt die Punkte auf einen bestimmten Wert. "+/-" addieren oder subtrahieren Punkte von der aktuellen Summe.

### Abzüge
Im adaptiven oder interaktiven Modus, ziehe so viele Punkte ab.

### Nächster
Soll zu einem nächsten Knoten gesprungen werden, falls ja zu welchen, ansonsten stoppe.

### Antworthinweis
Dieses Tag dient zur Berichterstattung. Es bestimmt den eindeutigen Pfad durch den Baum und das Ergebnis jeder Antwort. Es wird automatisch erzeugt, kann aber auch manuell zu etwas Sinnvollem geändert werden.';
$string['feedbackvariables'] = 'Feedback-Variablen';
$string['feedbackvariables_help'] = 'Die Feedback-Variablen erlauben es, die Eingabe zusammen mit den Aufgabenvariablen zu manipulieren, bevor der Rückmeldebaum durchlaufen wird. Variablen, die hier definiert werden, können überall im Rückmeldebaum benutzt werden.';
$string['feedbackvariables_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/KeyVals.md#Feedback_variables';
$string['fieldshouldnotcontainplaceholder'] = '{$a->field} sollten keine [[{$a->type}:...]] Platzhalter enthalten.';
$string['firstnodemusthavelowestnumber'] = 'Der erste Knoten muss die niedrigste Nummer haben.';
$string['fixdollars'] = 'Dollars korrigieren';
$string['fixdollars_help'] = 'Diese Option ist nützlich, wenn Sie TeX mit <code>$...$</code> und <code>$$...$$</code> Trennzeichen kopieren und einfügen (oder eingeben). Diese Trennzeichen werden während des Speichervorgangs durch die empfohlenen Trennzeichen ersetzt.';
$string['fixdollarslabel'] = 'Beim Speichern <code>$...$</code> mit <code>\\(...\\)</code>, <code>$$...$$</code> mit <code>\\[...\\]</code> und <code>@...@</code> mit <code>{@...@}</code> ersetzen.';
$string['forbiddendoubledollars'] = 'Verwenden Sie die Trennzeichen <code>\\(...\\)</code> für Inline-Maths und <code>\\[...\\]</code> für Anzeige-Maths. <code>$...$</code> und <code>$$...$$</code> sind nicht erlaubt. Es gibt am Ende des Formulars eine Option, um dies automatisch zu beheben.';
$string['forbidfloat'] = 'Verbiete Fließkommazahlen';
$string['forbidfloat_help'] = 'Falls JA werden Antworten von Studierenden, die Fließkommazahlen enthalten, als ungültig verworfen.';
$string['forbidfloat_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Forbid_Floats';
$string['forbidwords'] = 'Verbotene Wörter';
$string['forbidwords_help'] = 'Dies ist eine Komma-separierte Liste von Zeichenketten, die in den Teilnehmendenantworten verboten sind.';
$string['forbidwords_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/CASText.md#Forbidden_Words';
$string['generalfeedback'] = 'Allgemeines Feedback';
$string['generalfeedback_help'] = 'Das allgemeine Feedback ist ein CASText. Das allgemeine Feedback, auch Musterlösung genannt, wird den Teilnehmenden nach seinem Beantwortungsversuch gezeigt. Im Gegensatz zum (spezifischen) Feedback wird es allen Teilnehmenenden gleichermaßen gezeigt, unabhängig von ihrer eingegebenen Antwort. Hier können Variablen aus dem Aufgabentext verwendet werden.';
$string['generalfeedback_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/CASText.md#general_feedback';
$string['greek_alphabet_fact'] = '<center> <table> <tr><td> Großbuchstaben, (quad) </td><td> Kleinbuchstaben, (quad) </td><td> name </td> </tr> <tr> <td> (A) </td><td> (alpha) </td><td> alpha </td> </tr> <tr> <td> (B) </td><td> (beta) </td><td> beta </td> </tr> <tr> <td> (Gamma) </td><td> (gamma) </td><td> gamma </td> </tr> <tr> <td> (Delta) </td><td> (delta) </td><td> delta </td> </tr> <tr> <td> (E) </td><td> (epsilon) </td><td> epsilon </td> </tr> <tr> <td> (Z) </td><td> (zeta) </td><td> zeta </td> </tr> <tr> <td> (H) </td><td> (eta) </td><td> eta </td> </tr> <tr> <td> (Theta) </td><td> (theta) </td><td> theta </td> </tr> <tr> <td> (K) </td><td> (kappa) </td><td> kappa </td> </tr> <tr> <td> (M) </td><td> (mu) </td><td> mu </td> </tr> <tr> <td> (N) </td><td> ) u) </td><td> nu </td> </tr> <tr> <td> (Xi) </td><td> (xi) </td><td> xi </td> </tr> <tr> <td> (O) </td><td> (o) </td><td> omicron </td> </tr> <tr> <td> (Pi) </td><td> (pi) </td><td> pi </td> </tr> <tr> <td> (I) </td><td> (iota) </td><td> iota </td> </tr> <tr> <td> (P) </td><td> (rho) </td><td> rho </td> </tr> <tr> <td> (Sigma) </td><td> (sigma) </td><td> sigma </td> </tr> <tr> <td> (Lambda) </td><td> (lambda) </td><td> lambda </td> </tr> <tr> <td> (T) </td><td> (tau) </td><td> tau </td> </tr> <tr> <td> (Upsilon) </td><td> (upsilon) </td><td> upsilon </td> </tr> <tr> <td> (Phi) </td><td> (phi) </td><td> phi </td> </tr> <tr> <td> (X) </td><td> (chi) </td><td> chi </td> </tr> <tr> <td> (Psi) </td><td> (psi) </td><td> psi </td> </tr> <tr> <td> (Omega) </td><td> (omega) </td><td> omega </td></tr> </table></center>';
$string['greek_alphabet_name'] = 'Das griechische Alphabet';
$string['healthautomaxopt'] = 'Automatisch ein optimiertes Maxima-Image erstellen';
$string['healthautomaxopt_failed'] = 'Optimisiertes Maxima-Image Erstellen FEHLGESCHLAGEN: [{$a->errmsg}]';
$string['healthautomaxopt_nolisp'] = 'Die LISP-Version konnte nicht ermittelt werden, daher wurde das Maxima-Image nicht automatisch erstellt.';
$string['healthautomaxopt_notok'] = 'Maxima-Image wurde nicht automatisch erstellt.';
$string['healthautomaxopt_ok'] = 'Maxima-Image erstellt um: <tt>{$a->command}</tt>';
$string['healthautomaxopt_succeeded'] = 'Optimisiertes Maxima-Image Erstellen ERFOLGREICH';
$string['healthcheck'] = 'STACK Funktionscheck';
$string['healthcheckcache_db'] = 'CAS Ergebnisse werden in der Datenbank gecached.';
$string['healthcheckcache_none'] = 'CAS Ergebnisse werden nicht gecached.';
$string['healthcheckcache_otherdb'] = 'CAS Ergebnisse werden in einer anderen Datenbank gecached.';
$string['healthcheckcachestatus'] = 'Der Cache enthält momentan {$a} Einträge.';
$string['healthcheckconfig'] = 'Maxima Konfigurationsdatei';
$string['healthcheckconfigintro1'] = 'Finde und verwende Maxima in folgendem Verzeichnis:';
$string['healthcheckconfigintro2'] = 'Versuche die Maxima Konfigurationsdatei automatisch anzulegen.';
$string['healthcheckconnect'] = 'Versuche zum CAS zu verbinden';
$string['healthcheckconnectintro'] = 'Es wird versucht folgenden CAS-Text auszuwerten:';
$string['healthcheckcreateimage'] = 'Maxima-Image erstellen';
$string['healthcheck_desc'] = 'Das <a href="{$a->link}">Funktionscheckskript</a> hilft ihnen zu überprüfen, ob die Bestandteile von STACK reibungslos funktionieren.';
$string['healthcheckfilters'] = 'Stellen Sie bitte sicher, dass der {$a->filter} auf der <a href="{$a->url}">Filter-Übersichtsseite in der Administration</a> aktiviert ist.';
$string['healthchecklatex'] = 'Überprüfen Sie, ob LaTeX korrekt konvertiert wurde';
$string['healthchecklatexintro'] = 'STACK generiert LaTeX on-the-fly und ermöglichst es LaTeX-Code in Aufgabentexten zu verwenden. Es wird angenommen, dass der Code vom Moodle TeX Filter konvertiert wird.
Unten sind ein paar Beispiele für abgesetzte und inline Formeln in LaTeX, die im Browser korrekt angezeigt werden sollten. Fehler an dieser Stelle, zeigen Probleme mit dem Moodle-Filter auf, nicht von STACK selbst.
STACK selbst nutzt die einfache und Doppeldollar Notation, aber eventuell verwenden manche Frage-Autoren eine andere Notation.';
$string['healthchecklatexmathjax'] = 'STACK basiert auf dem Moodle MathJax-Filter. Eine Alternative besteht darin, JavaScript-Code zu Moodles zusätzlichem HTML hinzuzufügen. Mehr Informationen zu dieser Option finden Sie in den STACK-Installationsdokumenten.';
$string['healthcheckmathsdisplaymethod'] = 'Verwendete Maths Anzeigemethode: {$a}.';
$string['healthcheckmaximabat'] = 'Die Datei maxima.bat fehlt.';
$string['healthcheckmaximabatinfo'] = 'Dieses Skript kopiert automatisch die Datei maxima.bat von "C:Program filesMaxima-1.xx.ybin" nach "{$a}stack". Dies hat allerdings nicht funktioniert. Bitte kopieren Sie die Datei manuell.';
$string['healthcheckplots'] = 'Grafiken zeichnen';
$string['healthcheckplotsintro'] = 'Es sollten zwei verschiedene Graffiken erscheinen. Wenn zwei gleiche Grafiken zu sehen sind, dann zeigt dies einen Fehler in der Benennung der Grafikdateien an. Falls keine Fehler auftauchen, aber eine Grafik fehlt, könnten folgende Hinweise hilfreich sein: (i) Überprüfen Sie die Rechteeinstellungen (insbesondere Leserechte) der zwei temporären Verzeichnise. (ii) Ändern Sie Optionen mit denen GNUPlot die Grafiken erstellt. Momentan gibt es ein Webinterface dafür.';
$string['healthchecksamplecas'] = 'Ableitung von  {@ x^4/(1+x^4) @} is \\[ \\frac{d}{dx} \\frac{x^4}{1+x^4} = {@ diff(x^4/(1+x^4),x) @}. \\]';
$string['healthchecksampledisplaytex'] = '\\[\\sum_{n=1}^\\infty \\frac{1}{n^2} = \\frac{\\pi^2}{6}.\\]';
$string['healthchecksampleinlinetex'] = '\\(\\sum_{n=1}^\\infty \\frac{1}{n^2} = \\frac{\\pi^2}{6}\\).';
$string['healthchecksampleplots'] = 'Zwei Beispiels-Plots untenan. {@plot([x^4/(1+x^4),diff(x^4/(1+x^4),x)],[x,-3,3])@} {@plot([sin(x),x,x^2,x^3],[x,-3,3],[y,-3,3],grid2d)@} Ein dritter, kleinerer Plot kann hier dargestellt werden mit traditionellen Achsen. (Nur neuere Versionen von Maxima.) {@plot([sin(x),x,x^2,x^3],[x,-3,3],[y,-3,3],[box, false],[yx_ratio, 1],[axes, solid],[xtics, -3, 1, 3],[ytics, -3, 1, 3],[size,250,250])@}';
$string['healthchecksstackmaximatooold'] = 'So alt, dass die Version unbekannt ist!';
$string['healthchecksstackmaximaversion'] = 'Maxima-Version';
$string['healthchecksstackmaximaversionmismatch'] = 'Die verwendete Version der STACK-Maxima-Bibliotheken ({$a->usedversion}) stimmt nicht mit der von dieser Version des STACK-Fragetyps erwarteten ({$a->expectedversion}) überein. {$a->fix}';
$string['healthchecksstackmaximaversionok'] = 'Korrekte und erwartete STACK-Maxima-Bibliotheksversion wird verwendet ({$a->usedversion}).';
$string['healthuncached'] = 'Ungecachter CAS-Aufruf';
$string['healthuncachedintro'] = 'Dieser Abschnitt sendet immer einen echten Aufruf an das CAS, unabhängig von den aktuellen Cache-Einstellungen. Dies ist erforderlich, um sicherzustellen, dass die Verbindung zum CAS tatsächlich funktioniert.';
$string['healthuncachedstack_CAS_calculation'] = 'Erwartete CAS-Berechnung: {$a->expected}. Aktuelle CAS-Berechnung: {$a->actual}.';
$string['healthuncachedstack_CAS_not'] = 'CAS gab einige Daten wie erwartet zurück, aber es gab Fehler.';
$string['healthuncachedstack_CAS_ok'] = 'CAS gibt Daten wie erwartet zurück. Sie haben eine stehende Verbindung zum CAS.';
$string['healthuncachedstack_CAS_version'] = 'Erwartete Maxima-Version : "{$a->expected}". Aktuelle Maxima-Version: {$a->actual}.';
$string['healthuncachedstack_CAS_versionnotchecked'] = 'Sie haben die "default" Version von Maxima gewählt, also wird kein Maxima-Versionscheck vorgenommen. Ihre reine Verbindung nutzt derzeit Version {$a->actual}.';
$string['htmlfragment'] = 'Sie scheinen HTML-Elemente in Ihrem Ausdruck zu verwenden.';
$string['hyp_functions_name'] = 'Hyperbolische Funktionen';
$string['hyp_identities_name'] = 'Hyperbolische Identitäten';
$string['hyp_inverse_functions_fact'] = '\\[\\cosh^{-1}(x)=\\ln\\left(x+\\sqrt{x^2-1}\\right) \\quad \\mbox{ for } x\\geq 1\\]
\\[\\sinh^{-1}(x)=\\ln\\left(x+\\sqrt{x^2+1}\\right)\\]
\\[\\tanh^{-1}(x) = \\frac{1}{2}\\ln\\left({1+x\\over 1-x}\\right) \\quad \\mbox{ for } -1< x < 1\\]';
$string['hyp_inverse_functions_name'] = 'Inverse hyperbolische Funktionen';
$string['illegalcaschars'] = 'Die Zeichen @ und $ sind in der CAS Eingabe nicht erlaubt.';
$string['Illegal_floats'] = 'Ihre Antwort enthält Fließkommazahlen, welche in dieser Aufgabe nicht erlaubt sind. Bitte geben Sie die Zahlen als Brüche ein. So sollten Sie 1/3 und nicht 0.3333 (welche nur eine Annäherung darstellt) eingeben.';
$string['inputdisplayed'] = 'Angezeigt als';
$string['inputentered'] = 'Eingegebener Wert';
$string['inputexpression'] = 'Test-Eingabe';
$string['inputextraoptions'] = 'Zusätzliche Optionen';
$string['inputheading'] = 'Eingabe: {$a}';
$string['inputname'] = 'Eingabename';
$string['inputnamelength'] = 'Namen von Eingaben können nicht länger als 18 Zeichen sein. \'{$a}\' ist zu lang.';
$string['inputs'] = 'Eingaben';
$string['inputstatus'] = 'Status';
$string['inputstatusname'] = 'Leer';
$string['inputstatusnameinvalid'] = 'Ungültig';
$string['inputstatusnamescore'] = 'Punkte';
$string['inputstatusnamevalid'] = 'Gültig';
$string['inputtest'] = 'Eingabetest';
$string['inputtype'] = 'Eingabetyp';
$string['inputtypealgebraic'] = 'Algebraische Eingabe';
$string['inputtypeboolean'] = 'Wahr/Falsch';
$string['inputtypecheckbox'] = 'Checkbox';
$string['inputtypedropdown'] = 'Dropdown-Liste';
$string['inputtype_help'] = 'Dies bestimmt die Art des Eingabeelements, z.B. Formularfeld, Wahr/Falsch, oder Textfeld.';
$string['inputtype_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md';
$string['inputtypematrix'] = 'Matrix';
$string['inputtypenotes'] = 'Anmerkungen';
$string['inputtypenumerical'] = 'Numerisch';
$string['inputtyperadio'] = 'Radiobuttons';
$string['inputtypesinglechar'] = 'Einzelnes Zeichen';
$string['inputtypestring'] = 'Zeichenkette';
$string['inputtypetextarea'] = 'Textfeld';
$string['inputtypeunits'] = 'Einheiten';
$string['insertspaces'] = 'Sternchen nur für Leerzeichen einfügen';
$string['insertstars'] = 'Sternchen einfügen';
$string['insertstarsassumesinglechar'] = 'Sternchen einfügen, indem von Variablennamen mit nur einem Zeichen ausgegangen wird';
$string['insertstars_help'] = 'Diese Option bietet eine Reihe verschiedener Optionen zum Einfügen von Sternchen, bei denen die Multiplikation impliziert ist. Bitte lesen Sie die ausführlichere Dokumentation.';
$string['insertstars_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Insert_Stars';
$string['insertstarsno'] = 'Keine Sternchen einfügen';
$string['insertstarsspaces'] = 'Sternchen für implizierte Multiplikation und für Leerzeichen einfügen';
$string['insertstarsspacessinglechar'] = 'Sternchen einfügen, indem von Variablennamen mit nur einem Zeichen ausgegangen wird, implizierte und für Leerzeichen';
$string['insertstarsyes'] = 'Sternchen nur für implizierte Multiplikation einfügen';
$string['inversetrig'] = 'Inverse trigonometrische Funktionen';
$string['inversetrig_help'] = 'Steuert, wie inverse trigonometrische Funktionen in der CAS-Ausgabe angezeigt werden.';
$string['irred_Q_commonint'] = 'Sie müssen noch einen gemeinsamen Faktor ausklammern.';
$string['irred_Q_factored'] = 'Der Term {$a->m0} sollte ausmultipliziert werden.';
$string['irred_Q_optional_fac'] = 'Sie könnten noch etwas vereinfachen, so kann {$a->m0} weiter faktorisiert werden. Allerdings ist dies nicht verlangt.';
$string['Lowest_Terms'] = 'Ihre Antwort enthält Brüche, die nicht vollständig gekürzt sind. Bitte kürzen Sie entsprechende Faktoren heraus und versuchen Sie er nochmal.';
$string['matrixparens'] = 'Standard Form der Matrix-Klammern';
$string['matrixparens_help'] = 'Steuert die Standard-Form von Matrixklammern, wenn sie in der CAS-Ausgabe angezeigt werden.';
$string['Maxima_DivisionZero'] = 'Division durch Null.';
$string['multcross'] = 'Kreuz';
$string['multdot'] = 'Punkt';
$string['multiplicationsign'] = 'Multiplikationszeichen';
$string['multiplicationsign_help'] = 'Steuert, wie Multiplikationszeichen angezeigt werden.';
$string['multiplicationsign_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#multiplication';
$string['mustverify'] = 'Teilnehmende müssen validieren lassen';
$string['mustverify_help'] = 'Steuert, ob die Eingabe der Studierenden als erzwungener Prozess in zwei Schritten nochmals in validierter Form angezeigt  wird, bevor diese Eingabe dem Bewertungsmechanismus zur Verfügung gestellt wird. Syntaxfehler werden immer zurückgemeldet.';
$string['mustverify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Student_must_verify';
$string['mustverifyshowvalidation'] = 'Sie können die Validierung nicht in zwei Schritten erforderlich machen, aber die Ergebnisse der Validierung nicht nach dem ersten Schritt anzeigen. Dies versetzt die Teilnehmer/innen in eine unmögliche Position.';
$string['namealreadyused'] = 'Sie haben diesen Namen bereits verwendet.';
$string['newnameforx'] = 'Neuer Name für \'{$a}\'';
$string['next'] = 'Nächster';
$string['nextcannotbeself'] = 'Ein Knoten kann sich nicht selbst als nächsten Knoten verlinken.';
$string['nodehelp'] = 'Knoten des Rückmeldebaums';
$string['nodehelp_help'] = '### Antwortüberprüfung
Eine Antwortüberprüfung ist ein Test um zwei Ausdrücke dahingehend zu vergleichen, ob sie bestimmte mathematische Eigenschaften erfüllen.

### SAns
Dies ist das erste Argument der Antwortüberprüfungsfunktion. In asymmetrischen Tests wird dies als die Teilnehmendenantwort angesehen, obwohl es jeder gültige CAS Ausdruck sein könnte. Es können darin auch Variablen aus der Aufgabe oder dem Feedback benutzt werden.

### TAns
Dies ist das zweite Argument der Antwortüberprüfungsfunktion. In asymmetrischen Tests wird dies als die Dozentenantwort angesehen, obwohl es jeder gültige CAS Ausdruck sein könnte. Es können darin auch Variablen aus der Aufgabe oder dem Feedback benutzt werden.

### Test-Optionen
Dieses Feld erlaubt Antwortüberprüfung eine Option zu verwenden, z.B. eine Variable oder eine bestimmte numerische Präzision.

### Feedback unterdrücken
Falls JA, wird jedes von der Antwortüberprüfung automatisch generierte Feedback unterdrückt und dem Studierenden nicht angezeigt. Dies betrifft aber nicht die Feedback-Felder der Verzweigungen des Rückmeldebaums.';
$string['nodeloopdetected'] = 'Ein Kreis wurde in diesem Rückmeldebaum (PRT) entdeckt.';
$string['nodenotused'] = 'Kein anderer Knoten des Rückmeldebaums (PRT) verweist auf diesen Knoten.';
$string['nodex'] = 'Knoten {$a}';
$string['nodexdelete'] = 'Lösche Knoten {$a}';
$string['nodexfalsefeedback'] = 'Knoten {$a} FALSCH Feedback';
$string['nodextruefeedback'] = 'Knoten {$a} WAHR feedback';
$string['nodexwhenfalse'] = 'Knoten {$a} wenn FALSCH';
$string['nodexwhentrue'] = 'Knoten {$a} wenn WAHR';
$string['nonempty'] = 'Dies darf nicht leer sein.';
$string['noprtsifnoinputs'] = 'Eine Frage ohne Eingaben kann keinen Rückmeldebaum (PRT) haben.';
$string['notanswered'] = 'Nicht beantwortet';
$string['notavalidname'] = 'Kein gültiger Name';
$string['notestcasesyet'] = 'Es wurden bisher keine Testfälle hinzugefügt.';
$string['numericalinputdp'] = 'Sie müssen genau \\( {$a} \\) Dezimalstellen angeben.';
$string['numericalinputmaxdp'] = 'Sie dürfen höchstens \\( {$a} \\) Dezimalstellen angeben.';
$string['numericalinputmaxsf'] = 'Sie dürfen höchstens \\( {$a} \\) signifikante Stellen angeben.';
$string['numericalinputmindp'] = 'Sie müssen mindestens \\( {$a} \\) Dezimalstellen angeben.';
$string['numericalinputminsf'] = 'Sie müssen mindestens \\( {$a} \\) signifikante Stellen angeben.';
$string['numericalinputsf'] = 'Sie müssen genau \\( {$a} \\) signifikante Stellen angeben.';
$string['options'] = 'Optionen';
$string['overallresult'] = 'Gesamtergebnis';
$string['penalty'] = 'Abzüge';
$string['penaltyerror'] = 'Der Punktabzug muss eine numerischer Wert zwischen 0 und 1 sein.';
$string['penaltyerror2'] = 'Der Punktabzug muss leer oder ein numerischer Wert zwischen 0 und 1 sein.';
$string['penalty_help'] = 'Das Punktabzugsschema ermittels diesen Wert für jeden Rückmeldebaum (PRT) aus den verschiedenen gültigen Antwortversuchen, die nicht vollständig korrekt waren.';
$string['penalty_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Feedback.md';
$string['phpcasstring'] = 'PHP Ausgabe';
$string['phpsuitecolerror'] = 'PHP Fehler';
$string['phpvalid'] = 'V1';
$string['phpvalidatemismatch'] = '[PHP validate mismatch]';
$string['pleaseananswerallparts'] = 'Bitte beantworten Sie alle Teile der Aufgabe.';
$string['pleasecheckyourinputs'] = 'Bitte überprüfen Sie, ob ihre Eingabe wie gewünscht interpretiert wurde.';
$string['pluginname'] = 'STACK';
$string['pluginnameadding'] = 'STACK-Frage hinzufügen';
$string['pluginnameediting'] = 'STACK-Frage bearbeiten';
$string['pluginname_help'] = 'STACK ist ein Assessmentsystem für Mathematik.';
$string['pluginnamesummary'] = 'STACK ermöglicht es mathematische Fragestellungen in Moodle-Tests zu verwenden. Es bedient sich dabei eines Computeralgebrasystems um mathematische Eigenschaften der eingegebenen Antworten zu ermitteln und diese dann zu bewerten.';
$string['privacy:metadata'] = 'Der STACK-Fragentyp speichert keine personenbezogenen Daten.';
$string['prtcorrectfeedback'] = 'Standard Feedback für richtige Antworten';
$string['prtheading'] = 'Rückmeldebaum (PRT): {$a}';
$string['prtincorrectfeedback'] = 'Standard Feedback für falsche Antworten';
$string['prtmustbesetup'] = 'Ein Rückmeldebaum (PRT) muss aufgesetzt werden, bevor die Frage gespeichert werden kann.';
$string['prtname'] = 'PRT Name';
$string['prtnamelength'] = 'Namen von Rückmeldebäumen (PRT) können nicht länger als 18 Zeichen sein. \'{$a}\' ist zu lang.';
$string['prtnodesheading'] = 'Potentielle Rückmeldebaum-Knoten ({$a})';
$string['prtpartiallycorrectfeedback'] = 'Standard Feedback für teilweise richtige Antworten';
$string['prtruntimeerror'] = 'Der Knoten {$a->node} hat den folgenden Laufzeitfehler generiert: {$a->error}';
$string['prts'] = 'Potentielle Rückmeldebäume';
$string['prtwillbecomeactivewhen'] = 'Dieser potenzielle Rückmeldebaum wird aktiv, wenn Teilnehmende folgendes geantwortet hat: {$a}';
$string['qm_error'] = 'Ihre Antwort enthält das Fragezeichen "?", welches in Anworten nicht erlaubt ist. Bitte ersetzen Sie es mit konkreten Werten.';
$string['questiondoesnotuserandomisation'] = 'Diese Frage verwendet keine Randomisierung.';
$string['questionnotdeployedyet'] = 'Keine Varianten dieser Frage wurden bisher eingesetzt.';
$string['questionnote'] = 'Aufgabenhinweis';
$string['questionnote_help'] = 'Der Aufgabenhinweis ist ein CASText. Damit soll zwischen den verschiedenen zufälligen Versionen einer Frage unterschieden werden. Zwei Fragen sind gleich, genau dann wenn die Aufgabenhinweise gleich sind. Für die spätere Analyse ist es hilfreich sinnvolle Antworthinweise zu erstellen.';
$string['questionnote_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_note.md';
$string['questionnotempty'] = 'Der Antworthinweis kann nicht leer sein, wenn rand() bei der Definition der Aufgabenvariablen verwendet wird. Der Antworthinweis wird verwendet, um zwischen verschiedenen zufälligen Versionen der Aufgabe zu unterscheiden.';
$string['questionpreview'] = 'Vorschau der Frage';
$string['questionsimplify'] = 'Aufgabenweites Simplify';
$string['questionsimplify_help'] = 'Setzt innerhalb Maxima die globale Variable "simp" für die gesamte Aufgabe.';
$string['questionsimplify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Maxima.md#Simplification';
$string['questiontests'] = 'Test der Frage';
$string['questiontestspass'] = 'Alle Frage-Tests wurden bestanden.';
$string['questiontext'] = 'Aufgabentext';
$string['questiontextfeedbackonlycontain'] = 'Der Aufgabentext zusammen mit spezifischen Feedback sollte das Token \'{$a}\' nur einmal enthalten.';
$string['questiontext_help'] = 'Der Aufgabentext ist ein CASText. Dies ist die "Aufgabe", die der Studierenden konkret sieht. Sie müssen Eingabe- und Validierungsfelder in diesem Feld (und nur in diesem) unterbringen. Verwenden sie zum Beispiel `[[input:ans1]] [[validation:ans1]]`.';
$string['questiontext_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/CASText.md#question_text';
$string['questiontextmustcontain'] = 'Der Aufgabentext muss das Token \'{$a}\' enthalten.';
$string['questiontextnonempty'] = 'Der Aufgabentext darf nicht leer sein.';
$string['questiontextonlycontain'] = 'Der Aufgabentext sollte das Token \'{$a}\' nur einmal enthalten.';
$string['questiontextplaceholderswhitespace'] = 'Platzhalter dürfen keine Leerzeichen enthalten. Dieser scheint zu enthalten: \'{$a}\'.';
$string['questionvalue'] = 'Aufgabenwert';
$string['questionvaluepostive'] = 'Der Aufgabenwert muss positiv sein';
$string['questionvariables'] = 'Aufgabenvariablen';
$string['questionvariables_help'] = 'Dieses Feld erlaubt es CAS Variablen zu definieren und zu verändern, z.B. um Zufallsversionen zu ermöglichen. Diese Variablen sind in allen anderen Teilen der Aufgabe verfügbar.';
$string['questionvariables_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/KeyVals.md';
$string['questionvariablevalues'] = 'Fragevariabeln-Werte';
$string['quiet'] = 'Feedback unterdrücken';
$string['quiet_help'] = 'Falls JA, wird jedes von der Antwortüberprüfung automatisch generierte Feedback unterdrückt und dem Studierenden nicht angezeigt. Dies betrifft aber nicht die Feedback-Felder der Verzweigungen des Rückmeldebaums.';
$string['renamequestionparts'] = 'Teile der Frage umbenennen';
$string['replacedollarscount'] = 'Diese Kategorie enthält {$a} STACK-Fragen.';
$string['replacedollarserrors'] = 'Die folgenden Fragen generierten Fehler.';
$string['replacedollarsin'] = 'Korrigierte Maths-Trennzeichen in Feld {$a}';
$string['replacedollarsindex'] = 'Kontexte mit STACK-Fragen';
$string['replacedollarsindexintro'] = 'Ein Klick auf einen, der Links leitet Sie auf eine Seite, auf der Sie die Fragen auf alte Maths-Trennzeichen überprüfen und automatisch korrigieren können. Wenn Sie zu viele Fragen (Tausende) in einem Kontext haben, wird die Menge der Ausgabe wahrscheinlich Ihren Webbrowser überfordern. In diesem Fall fügen Sie der URL einen Parameter preview=0 hinzu und versuchen es erneut.';
$string['replacedollarsindextitle'] = '$s in Fragetexten ersetzen';
$string['replacedollarsnoproblems'] = 'Keine problematische Trennzeichen gefunden';
$string['replacedollarstitle'] = 'Ersetze $s in Fragetexten in {$a}';
$string['requiredfield'] = 'Dieses Feld wird benötigt!';
$string['requirelowestterms'] = 'Verlange vollständige Kürzung';
$string['requirelowestterms_help'] = 'Falls JA, muss jeder Koeffizient oder andere rationale Zahlen in Ausdrücken vollständig gekürzt eingegeben werden. Andernfalls wird die Eingabe als ungültig zurückgewiesen.';
$string['requirelowestterms_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Require_lowest_terms';
$string['runquestiontests'] = 'Frage-Tests und eingesetzte Varianten';
$string['sans'] = 'SAns';
$string['sans_help'] = 'Dies ist das erste Argument der Antwortüberprüfungsfunktion. In asymmetrischen Tests wird dies als die Studierendenantwort angesehen, obwohl es jeder gültige CAS Ausdruck sein könnte. Es können darin auch Variablen aus der Aufgabe oder dem Feedback benutzt werden.';
$string['sansinvalid'] = 'SAns ist ungültig: {$a}';
$string['sans_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_tests.md';
$string['sansrequired'] = 'SAns darf nicht leer sein.';
$string['score'] = 'Score';
$string['scoreerror'] = 'Die Punkte müssen ein numerischer Wert zwischen 0 und 1 sein.';
$string['scoremode'] = 'Mod';
$string['seedx'] = 'Seed {$a}';
$string['seethisquestioninthequestionbank'] = 'Diese Frage in der Fragensammlung ansehen';
$string['settingajaxvalidation'] = 'Sofortige Validierung';
$string['settingajaxvalidation_desc'] = 'Wenn diese Einstellung aktiviert ist, werden die aktuellen Eingaben der Studierenden validiert, sobald sie ihre Eingabe unterbrechen. Dies führt zu einer besseren Benutzererfahrung, erhöht jedoch vermutlich die Serverlast.';
$string['settingcasdebugging'] = 'CAS Debugging';
$string['settingcasdebugging_desc'] = 'Sollen Debugging Informationen über die CAS-Verbindung gespeichert werden?';
$string['settingcasmaximaversion'] = 'Maxima-Version';
$string['settingcasmaximaversion_desc'] = 'Die Version des verwendeten Maxima.';
$string['settingcasresultscache'] = 'CAS Ergebnis Caching';
$string['settingcasresultscache_db'] = 'Cache in der Datenbank';
$string['settingcasresultscache_desc'] = 'Diese Einstellung bestimmt, ob Aufrufe zum CAS gecached werden. Dies sollte im Normalfall eingeschaltet sein. Außnahmen betreffen die Weiterentwicklung des Maxima Codes.
Der aktuelle Status des Cache wird auf der Funktionstests-Seite angezeigt. Wenn Sie Einstellungen ändern, z.B. das GNUPlot-Kommando, so muss der Cache erst geleert werden, damit die Änderungen Wirkung zeigen.';
$string['settingcasresultscache_none'] = 'Kein Cache';
$string['settingcastimeout'] = 'Zeitüberschreitung der CAS-Verbindung';
$string['settingcastimeout_desc'] = 'Timeout für die Verbindungsversuche zu Maxima.';
$string['settingdefaultinputoptions'] = 'Standard Eingabeoptionen';
$string['settingdefaultinputoptions_desc'] = 'Werden beim Erstellen einer neuen Frage oder beim Hinzufügen einer neuen Eingabe zu einer vorhandenen Frage verwendet.';
$string['settingdefaultquestionoptions'] = 'Standard Eingabeoptionen';
$string['settingdefaultquestionoptions_desc'] = 'Beim Anlegen einer neuen Frage verwendet.';
$string['settingmathsdisplay'] = 'Maths-Filter';
$string['settingmathsdisplay_desc'] = 'Die Methode, die zum Anzeigen von Maths verwendet wird. Wenn Sie MathJax auswählen, müssen Sie die Anweisungen auf der Seite Healthcheck befolgen, um es einzurichten. Wenn Sie einen Filter auswählen, müssen Sie sicherstellen, dass der Filter auf der Filter-Übersichtsseite in der Administration aktiviert ist.';
$string['settingmathsdisplay_mathjax'] = 'MathJax';
$string['settingmathsdisplay_maths'] = 'Alter OU Maths-Filter';
$string['settingmathsdisplay_oumaths'] = 'Neuer OU Maths-Filter';
$string['settingmathsdisplay_tex'] = 'Moodle TeX-Filter';
$string['settingmaximalibraries'] = 'Optionale Maxima-Bibliotheken laden:';
$string['settingmaximalibraries_desc'] = 'Dies ist eine kommagetrennte Liste von Namen von Maxima-Bibliotheken, die automatisch in Maxima geladen werden. Es können nur unterstützte Bibliotheken verwendet werden: siehe die Informationen in den Dokumentationen für unterstützte Bibliotheksnamen. Diese Bibliotheken werden nicht geladen, wenn Sie ein Maxima-Image zur Optimierung der Leistung gespeichert haben.';
$string['settingmaximalibraries_error'] = 'Das folgende Paket ist nicht unterstützt: {$a}';
$string['settingmaximalibraries_failed'] = 'Es scheint, als ob einige der Maxima-Pakete, die Sie angefordert haben, nicht geladen wurden. Informationen zu diesem Fehler finden Sie in der Installationsanleitung.';
$string['settingplatformmaximacommand'] = 'Maxima Kommando';
$string['settingplatformmaximacommand_desc'] = 'Für Plattform: Server muss hier die URL des Maxima Pool-Servlets angegeben sein. Für andere Plattformtypen wird STACK, wenn das Feld leer ist, sinnvoll zu raten versuchen, wo Maxima zu finden ist. Wenn dies fehlschlägt, sollte hier der vollständige Pfad der Maxima- oder Maxima-optimierten ausführbaren Datei angegeben sein. Ziehen Sie in Betracht, den Timeout-Befehl für Unix-basierte Systeme zu verwenden. Z.B. timeout --kill-after=10s 10s maxima';
$string['settingplatformplotcommand'] = 'Plot Kommando';
$string['settingplatformplotcommand_desc'] = 'STACK benötigt den Shellbefehl zum Starten von GNUPlot. Wenn leer, versucht STACK sinnvoll zu raten.';
$string['settingplatformtype'] = 'Plattform';
$string['settingplatformtype_desc'] = 'STACK benötigt die Angabe des Betriebssystem, auf dem es läuft. Die Server und MaximaPool Optionen geben bessere Performance, wofür aber weitere Server eingerichtet werden müssen. Die Option "Linux (optimiert)" ist in der Dokumentation unter "Optimising Maxima" erklärt.';
$string['settingplatformtypeserver'] = 'Server';
$string['settingplatformtypeunix'] = 'Linux';
$string['settingplatformtypeunixoptimised'] = 'Linux (optimiert)';
$string['settingplatformtypewin'] = 'Windows';
$string['settingreplacedollars'] = '<code>$</code> und <code>$$</code> ersetzen';
$string['settingreplacedollars_desc'] = 'Ersetze <code>$...$</code> und <code>$$...$$</code> Trennzeichen in Fragetexten, zusätzlich zu <code>\\\\[...\\\\]</code> und <code>\\\\(...\\\\)</code>. Eine bessere Option ist die Verwendung des Skripts \'Maths-Trennzeichen korrigieren\', auf das im Folgenden Bezug genommen wird.';
$string['settingserveruserpass'] = 'Server username:password';
$string['settingserveruserpass_desc'] = 'Wenn Sie bei Plattform: Server verwenden und Ihren Maxima-Pool-Server mit HTTP-Authentifizierung eingerichtet haben, können Sie hier den Benutzernamen und das Passwort eingeben. Das ist etwas sicherer, als sie in die URL zu schreiben. Das Format ist username:password.';
$string['settingsmathsdisplayheading'] = 'Maths Anzeige-Optionen';
$string['settingsmaximasettings'] = 'Zu Maxima verbinden';
$string['settingusefullinks'] = 'Nützliche Links';
$string['showingundeployedvariant'] = 'Zeige nicht eingesetzte Varianten: {$a}';
$string['showvalidation'] = 'Zeige die Validierung';
$string['showvalidation_help'] = 'Zeigt eine validierte Darstellung der Eingabe an. Dies schließt auch die traditionelle zweidimensionale Darstellung ein.';
$string['showvalidation_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Show_validation';
$string['showvalidationno'] = 'Nein';
$string['showvalidationyes'] = 'Ja, mit Variabelliste';
$string['showvalidationyesnovars'] = 'Nein, ohne Variabelliste';
$string['singlechargotmorethanone'] = 'Sie können hier nur ein Zeichen eingeben.';
$string['specificfeedback'] = 'Spezifisches Feedback';
$string['specificfeedback_help'] = 'Standardgemäß wird Feedback für jeden potenziellen Rückmeldebaum in diesem Block angezeigt. Es kann auch zum Aufgabentext verschoben werden, wobei dann allerdings die Anzeige nicht abhängig von der Eingabe gemacht wird. Beachte, dieser Block ist kein CASText.';
$string['specificfeedbacktags'] = 'Das spezifische Feedback darf nicht die Token \'{$a}\' enthalten.';
$string['sqrtsign'] = 'Wurzeln';
$string['sqrtsign_help'] = 'Steuert wie irrationale Zahlen angezeigt werden.';
$string['sqrtsign_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#surd';
$string['stackBlock_elif_after_else'] = '"elif" nach einem "else" in einem if-Block.';
$string['stackBlock_elif_out_of_an_if'] = '"elif" kann nicht außerhalb eines if-Blocks existieren.';
$string['stackBlock_else_out_of_an_if'] = '"else" kann nicht außerhalb eines if-Blocks existieren.';
$string['stackBlock_escapeNeedsValue'] = 'escape-Block braucht ein Testattribut.';
$string['stackBlock_ifNeedsCondition'] = 'if-Block braucht ein Testattribut.';
$string['stackBlock_multiple_else'] = 'Mehrere else-Verzweigungen in einem if-Block.';
$string['stackCas_allFailed'] = 'Das CAS lieferte keine ausgewerteten Ausdrücke zurück. Bitte überprüfen sie die Verbindung zum CAS.';
$string['stackCas_apostrophe'] = 'Apostroph-Zeichen sind in Rückmeldungen nicht erlaubt.';
$string['stackCas_bracketsdontmatch'] = 'Die Klammern im Ausdruck sind falsch verschachtelt: {$a->cmd}.';
$string['stackCas_CASError'] = 'Das CAS lieferte folgende Fehler zurück:';
$string['stackCas_CASErrorCaused'] = 'verursacht durch den folgenden Fehler:';
$string['stackCas_failedReturn'] = 'Das CAS lieferte keine Daten zurück.';
$string['stackCas_failedReturnOne'] = 'Das CAS lieferte einige Daten nicht zurück.';
$string['stackCas_failedValidation'] = 'fehlgeschlagene CASText Validierung.';
$string['stackCas_finalChar'] = '\'{$a->char}\' ist ein ungültiges Endzeichen in {$a->cmd}';
$string['stackCas_forbiddenChar'] = 'CAS Befehler dürfen die folgenden Zeichen nicht enthalten: {$a->char}.';
$string['stackCas_forbiddenWord'] = 'Der Ausdruck {$a->forbid} ist verboten.';
$string['stackCas_invalidCommand'] = 'CAS Befehle sind ungültig.';
$string['stackCas_MissingAt'] = 'Es fehlt ein @ Zeichen.';
$string['stackCas_MissingCloseDisplay'] = 'Fehlende ]';
$string['stackCas_MissingCloseHTML'] = 'Fehlendes schließendes HTML Tag';
$string['stackCas_MissingCloseInline'] = 'Fehlende <code>\\)</code>.';
$string['stackCas_MissingClosingRawCAS'] = 'Fehlende <code>#}</code>.';
$string['stackCas_MissingClosingTeXCAS'] = 'Fehlende <code>@}</code>.';
$string['stackCas_MissingDollar'] = 'Es fehlt ein $ Zeichen';
$string['stackCas_missingLeftBracket'] = 'Es fehlt eine linke Klammer <span class="stacksyntaxexample">{$a->bracket}</span> in dem Ausdruck: {$a->cmd}.';
$string['stackCas_MissingOpenDisplay'] = 'Fehlende [';
$string['stackCas_MissingOpenHTML'] = 'Fehlendes öffnendes HTML Tag';
$string['stackCas_MissingOpenInline'] = 'Fehlende (';
$string['stackCas_MissingOpenRawCAS'] = 'Fehlende <code>{#</code>.';
$string['stackCas_MissingOpenTeXCAS'] = 'Fehlende <code>{@</code>.';
$string['stackCas_missingRightBracket'] = 'Es fehlt eine rechte Klammer <span class="stacksyntaxexample">{$a->bracket}</span> in dem Ausdruck: {$a->cmd}.';
$string['stackCas_MissingStars'] = 'Anscheinend fehlen "*" Zeichen. Vielleicht meinten Sie {$a->cmd}.';
$string['stackCas_MissingString'] = 'Sie haben ein Anführungszeichen <code>"</code> vergessen.';
$string['stackCas_newline'] = 'Zeilenvorschub-Zeichen sind in Rückmeldungen nicht erlaubt.';
$string['stackCas_percent'] = '&#037; gefunden im Ausdruck {$a->expr}.';
$string['stackCas_spaces'] = 'Leerzeichen gefunden im Ausdruck {$a->expr}.';
$string['stackCas_spuriousop'] = 'Unbekannter Operator: {$a->cmd}.';
$string['stackCas_StringOperation'] = 'Eine Zeichenfolge scheint an der falschen Stelle zu sein. Dies ist das Problem: <code>{$a->issue}</code>.';
$string['stackCas_triginv'] = 'Inverse trigonometrische Funktionen werden {$a->goodinv}, und nicht {$a->badinv} geschrieben.';
$string['stackCas_unknownFunction'] = 'Unbekannte Funktion: {$a->forbid}.';
$string['stackCas_unsupportedKeyword'] = 'Nicht unterstütztes Schlüsselwort: {$a->forbid}.';
$string['stackDoc_404'] = 'Fehler 404';
$string['stackDoc_404message'] = 'Datei nicht gefunden.';
$string['stackDoc_directoryStructure'] = 'Verzeichnisstruktur';
$string['stackDoc_docs'] = 'STACK Dokumentation';
$string['stackDoc_docs_desc'] = '<a href="{$a->link}">Dokumentation von STACK</a>: Lokales (unveränderliches) Wiki.';
$string['stackDoc_home'] = 'Dokumentation Anfang';
$string['stackDoc_index'] = 'Kategorieindex';
$string['stackDoc_parent'] = 'Vorheriges';
$string['stackDoc_siteMap'] = 'Site map';
$string['stackDoc_version'] = 'Ihre Seite verwendet die STACK-Version {$a}.';
$string['stackInstall_input_intro'] = 'Auf dieser Seite lässt sich testen, wie STACK die verschiedenen Studierendeneingaben interpretiert. Momentan geschieht dies nur mit sehr großzügigen Einstellungen, um eine möglichst informale Syntax anzuwenden und Sternchen einzufügen. <br />\'V\' Spalten zeigen die Validität bzgl. PHP und dem CAS an.  V1 = PHP valid, V2 = CAS valid.';
$string['stackInstall_input_title'] = 'Eine Testumgebung für die Validierung von Studierendeneingaben';
$string['stackInstall_input_title_desc'] = 'Das <a href="{$a->link}">Input-Test-Skript</a> bietet Testfälle an, wie STACK mathematische Ausdrücke interpretiert. Diese sind auch nützlich, um an diesen Beispielen zu lernen.';
$string['stackInstall_replace_dollars_desc'] = 'Das <a href="{$a->link}">Maths-Trennzeichen korrigieren-Skript</a> kann verwendet werden, um Trennzeichen im alten Stil wie <code>@...@</code>, <code>$...$</code> und <code>$$...$$</code> in Ihren Fragen mit dem neuen empfohlenen <code>{@...@}</code>, <code>\\(...\\)</code> und <code>\\[...\\]</code> zu ersetzen.';
$string['stackInstall_testsuite_choose'] = 'Bitte wählen Sie eine Antwortüberprüfung.';
$string['stackInstall_testsuite_errors'] = 'Diese Frage hat zur Laufzeit die folgenden Fehler generiert.';
$string['stackInstall_testsuite_fail'] = 'Nicht alle Tests bestanden!';
$string['stackInstall_testsuite_failingtests'] = 'Tests die fehlschlugen';
$string['stackInstall_testsuite_failingupgrades'] = 'Fragen, die beim Upgrade fehlgeschlagen sind.';
$string['stackInstall_testsuite_intro'] = 'Diese Seite erlaubt einen Korrektheitstest von STACKs Antwortüberprüfungen. Beachten Sie, dass nur Antwortüberprüfungen über das Webinterface getestet werden können. Andere Maxima Befehle müssen separat per Kommandozeile getestet werden: siehe unittests.mac.';
$string['stackInstall_testsuite_nogeneralfeedback'] = 'Fragen ohne allgemeines Feedback: Studierende schätzen ausgearbeitete Lösungen sehr!';
$string['stackInstall_testsuite_notests'] = 'Fragen ohne Tests: bitte fügen Sie einige hinzu!';
$string['stackInstall_testsuite_pass'] = 'Alle Tests bestanden!';
$string['stackInstall_testsuite_title'] = 'Eine Testumgebung für STACK Antwortüberprüfungen';
$string['stackInstall_testsuite_title_desc'] = 'Das <a href="{$a->link}">Antwortüberprüfungsskript</a> überprüft, dass die Antwortüberprüfungen korrekt funktionieren. Diese sind auch als Praxisbeispiele für eigene Anpassungen sehr hilfreich.';
$string['stackOptions_AnsTest_values_AlgEquiv'] = 'AlgEquiv';
$string['stackOptions_AnsTest_values_CasEqual'] = 'CasEqual';
$string['stackOptions_AnsTest_values_CompSquare'] = 'CompletedSquare';
$string['stackOptions_AnsTest_values_Diff'] = 'Diff';
$string['stackOptions_AnsTest_values_EqualComAss'] = 'EqualComAss';
$string['stackOptions_AnsTest_values_Equiv'] = 'EquivReasoning';
$string['stackOptions_AnsTest_values_EquivFirst'] = 'EquivFirst';
$string['stackOptions_AnsTest_values_Expanded'] = 'Expanded';
$string['stackOptions_AnsTest_values_FacForm'] = 'FacForm';
$string['stackOptions_AnsTest_values_GT'] = 'Num-GT';
$string['stackOptions_AnsTest_values_GTE'] = 'Num-GTE';
$string['stackOptions_AnsTest_values_Int'] = 'Int';
$string['stackOptions_AnsTest_values_LowestTerms'] = 'LowestTerms';
$string['stackOptions_AnsTest_values_NumAbsolute'] = 'NumAbsolute';
$string['stackOptions_AnsTest_values_NumDecPlaces'] = 'NumDecPlaces';
$string['stackOptions_AnsTest_values_NumDecPlacesWrong'] = 'NumDecPlacesWrong';
$string['stackOptions_AnsTest_values_NumRelative'] = 'NumRelative';
$string['stackOptions_AnsTest_values_NumSigFigs'] = 'NumSigFigs';
$string['stackOptions_AnsTest_values_PartFrac'] = 'PartFrac';
$string['stackOptions_AnsTest_values_RegExp'] = 'RegExp';
$string['stackOptions_AnsTest_values_SameType'] = 'SameType';
$string['stackOptions_AnsTest_values_Sets'] = 'Mengen';
$string['stackOptions_AnsTest_values_SigFigsStrict'] = 'SigFigsStrict';
$string['stackOptions_AnsTest_values_SingleFrac'] = 'SingleFrac';
$string['stackOptions_AnsTest_values_String'] = 'String';
$string['stackOptions_AnsTest_values_StringSloppy'] = 'StringSloppy';
$string['stackOptions_AnsTest_values_SubstEquiv'] = 'SubstEquiv';
$string['stackOptions_AnsTest_values_SysEquiv'] = 'SysEquiv';
$string['stackOptions_AnsTest_values_UnitsAbsolute'] = 'UnitsAbsolute';
$string['stackOptions_AnsTest_values_UnitsRelative'] = 'UnitsRelative';
$string['stackOptions_AnsTest_values_UnitsSigFigs'] = 'UnitsSigFigs';
$string['stackOptions_AnsTest_values_UnitsStrictAbsolute'] = 'UnitsStrictAbsolute';
$string['stackOptions_AnsTest_values_UnitsStrictRelative'] = 'UnitsStrictRelative';
$string['stackOptions_AnsTest_values_UnitsStrictSigFigs'] = 'UnitsStrictSigFigs';
$string['stackQuestion_noQuestionParts'] = 'Dieses Element hat keine Frageteile zum beantworten.';
$string['stack:usediagnostictools'] = 'Verwende die STACK Tools';
$string['stackversionaddrowerror'] = 'Diese Frage verwendet die Funktion "addrow" in {$a}, die sich in STACK Version 4.2 geändert hat. Bearbeiten Sie diese Frage, um stattdessen "rowadd" zu verwenden.';
$string['stackversionedited'] = 'Diese Frage wurde mit STACK Version {$a} erstellt.';
$string['stackversionmulerror'] = 'Diese Frage hat eine Eingabe, die die Option "mul" verwendet, die nach STACK Version 4.2 nicht unterstützt wird. Bitte bearbeiten Sie diese Frage.';
$string['stackversionnone'] = 'Diese Frage wurde nicht bearbeitet, seit die Frageversionsnummerierung in STACK 4.2 eingeführt wurde. Bitte überprüfen Sie Ihre Frage sorgfältig.';
$string['stackversionnow'] = 'Die aktuelle Version von STACK ist {$a}.';
$string['stop'] = '[stop]';
$string['strictsyntax'] = 'Strenge Syntax';
$string['strictsyntax_help'] = 'Muss die Eingabe in strenger Maxima Syntax erfolgen? Falls nicht, erhöht dies die Muster in denen vergessene Sternchen * erkannt werden, ebenso wie Funktionsaufrufe und wissenschaftliche Notationen.';
$string['strictsyntax_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Strict_Syntax';
$string['strlengtherror'] = 'Diese Zeichenkette darf nicht mehr als 255 Zeichen beinhalten.';
$string['studentanswer'] = 'Studierendeneingabe';
$string['studentValidation_invalidAnswer'] = 'Diese Antwort ist ungültig.';
$string['studentValidation_listofunits'] = 'In Ihrer Antwort wurden die folgenden Einheiten gefunden: {$a}';
$string['studentValidation_listofvariables'] = 'In Ihrer Antwort wurden die folgenden Variablen gefunden: {$a}';
$string['studentValidation_yourLastAnswer'] = 'Ihre letzte Antwort wurde folgendermaßen interpretiert: {$a}';
$string['Subst'] = 'Ihre Antwort wäre richtig, wenn man die folgende Variablensubstitution vornimmt. {$a->m0}';
$string['switchtovariant'] = 'Wechsle zu beliebiger Variante';
$string['syntaxattributeplaceholder'] = 'Platzhalter';
$string['syntaxattributevalue'] = 'Wert';
$string['syntaxhint'] = 'Syntax-Hinweis';
$string['syntaxhint_help'] = 'Der Syntax-Hinweis erscheint, wenn das Antwortfeld von Studierenden leer gelassen wird.';
$string['syntaxhint_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Syntax_Hint';
$string['tans'] = 'TAns';
$string['tans_help'] = 'Dies ist das zweite Argument der Antwortüberprüfungsfunktion. In asymmetrischen Tests wird dies als die Dozentenantwort angesehen, obwohl es jeder gültige CAS Ausdruck sein könnte. Es können darin auch Variablen aus der Aufgabe oder dem Feedback benutzt werden.';
$string['tansinvalid'] = 'TAns ist ungültig: {$a}';
$string['tans_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_tests.md';
$string['tansrequired'] = 'TAns darf nicht leer sein.';
$string['teacheranswer'] = 'Musterlösung';
$string['teacheranswershow'] = 'Eine richtige Antwort ist \\( {$a->display} \\). Sie kann so eingegeben werden: {$a->value}';
$string['teacheranswershow_disp'] = 'Eine richtige Antwort ist {$a->display} .';
$string['teacheranswershownotes'] = 'Für diese Eingabe wurde keine korrekte Antwort geliefert.';
$string['teachersanswer'] = 'Musterlösung';
$string['teachersanswer_help'] = 'Der Dozent muss eine Musterlösung für jedes Eingabefeld angeben. Dies muss eine gültige Maxima-Zeichenkette sein. Sie kann Variablen aus dem Aufgabentext enthalten.';
$string['teachersanswer_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#model_answer';
$string['testcasexresult'] = 'Testfall {$a->no} {$a->result}';
$string['TEST_FAILED'] = 'Die Antwortüberprüfung konnte nicht korrekt ausgeführt werden. Bitte kontaktieren sie ihren Kursleiter.';
$string['TEST_FAILED_Q'] = 'Die Antworttests wurden nicht korrekt ausgeführt: Bitte Fragen Sie Ihren Trainer.';
$string['testingquestion'] = 'Teste Frage {$a}';
$string['testingquestionvariants'] = 'Fragevarianten überprüfen';
$string['testinputs'] = 'Test-Eingaben';
$string['testoptions'] = 'Test-Optionen';
$string['testoptions_help'] = 'Dieses Feld erlaubt Antwortüberprüfung eine Option zu verwenden, z.B. eine Variable oder eine bestimmte numerische Präzision.';
$string['testoptionsinvalid'] = 'Die Testoptionen sind ungültig: {$a}';
$string['testoptions_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_tests.md';
$string['testoptionsrequired'] = 'Testoptionen werden für diesen Test benötigt.';
$string['testpassesandfails'] = '{$a->passes} Bestandene und {$a->fails} Fehlgeschlagene.';
$string['testsuitecolerror'] = 'CAS Fehler';
$string['testsuitecolexpectedscore'] = 'Erwartete Punkte';
$string['testsuitecolpassed'] = 'Bestanden?';
$string['testsuitecolrawmark'] = 'Raw Punkte';
$string['testsuitefail'] = 'Fehlgeschlagen';
$string['testsuitefeedback'] = 'Feedback';
$string['testsuiteknownfail'] = 'Erwarteter Fehlschlag';
$string['testsuiteknownfailmaths'] = 'Erwarteter Fehlschlag (Mathematik)';
$string['testsuitenotests'] = 'Anzahl der Tests: {$a->no}.';
$string['testsuitepass'] = 'Bestanden';
$string['testsuiteteststook'] = 'Tests dauerten {$a->time} Sekunden.';
$string['testsuiteteststookeach'] = 'Durchschnitt pro Test: {$a->time} Sekunden.';
$string['testthisvariant'] = 'Wechsle um diese Variante zu testen';
$string['texdisplaystyle'] = 'Gleichung im "Anzeige"-Stil';
$string['texinlinestyle'] = 'Gleichung im "Inline"-Stil';
$string['tidyquestion'] = 'Frage nachbessern';
$string['tidyquestionx'] = 'Teile der Frage {$a} umbenennen';
$string['trig_degrees_radians_fact'] = '\\[
360^\\circ= 2\\pi \\hbox{ radians},\\quad
1^\\circ={2\\pi\\over 360}={\\pi\\over 180}\\hbox{ radians}
\\]
\\[
1 \\hbox{ radian} = {180\\over \\pi} \\hbox{ degrees}
\\approx 57.3^\\circ
\\]';
$string['trig_degrees_radians_name'] = 'Grade und Radianten';
$string['trig_standard_identities_fact'] = '\\[\\sin(a\\pm b)\\ = \\ \\sin(a)\\cos(b)\\ \\pm\\ \\cos(a)\\sin(b)\\]
\\[\\cos(a\\ \\pm\\ b)\\ = \\ \\cos(a)\\cos(b)\\ \\mp \\sin(a)\\sin(b)\\]
\\[\\tan (a\\ \\pm\\ b)\\ = \\ {\\tan (a)\\ \\pm\\ \\tan (b)\\over1\\ \\mp\\ \\tan (a)\\tan (b)}\\]
\\[ 2\\sin(a)\\cos(b)\\ = \\ \\sin(a+b)\\ +\\ \\sin(a-b)\\]
\\[ 2\\cos(a)\\cos(b)\\ = \\ \\cos(a-b)\\ +\\ \\cos(a+b)\\]
\\[ 2\\sin(a)\\sin(b) \\ = \\ \\cos(a-b)\\ -\\ \\cos(a+b)\\]
\\[ \\sin^2(a)+\\cos^2(a)\\ = \\ 1\\]
\\[ 1+{\\rm cot}^2(a)\\ = \\ {\\rm cosec}^2(a),\\quad \\tan^2(a) +1 \\ = \\ \\sec^2(a)\\]
\\[ \\cos(2a)\\ = \\ \\cos^2(a)-\\sin^2(a)\\ = \\ 2\\cos^2(a)-1\\ = \\ 1-2\\sin^2(a)\\]
\\[ \\sin(2a)\\ = \\ 2\\sin(a)\\cos(a)\\]
\\[ \\sin^2(a) \\ = \\ {1-\\cos (2a)\\over 2}, \\qquad \\cos^2(a)\\ = \\ {1+\\cos(2a)\\over 2}\\]';
$string['trig_standard_identities_name'] = 'Identitäten der trigonometrischen Funktionen';
$string['trig_standard_values_fact'] = '\\[\\sin(45^\\circ)={1\\over \\sqrt{2}}, \\qquad \\cos(45^\\circ) = {1\\over \\sqrt{2}},\\qquad
\\tan( 45^\\circ)=1
\\]
\\[
\\sin (30^\\circ)={1\\over 2}, \\qquad \\cos (30^\\circ)={\\sqrt{3}\\over 2},\\qquad
\\tan (30^\\circ)={1\\over \\sqrt{3}}
\\]
\\[
\\sin (60^\\circ)={\\sqrt{3}\\over 2}, \\qquad \\cos (60^\\circ)={1\\over 2},\\qquad
\\tan (60^\\circ)={ \\sqrt{3}}
\\]';
$string['trig_standard_values_name'] = 'Standardwerte der trigonometrischen Funktionen';
$string['true'] = 'Wahr';
$string['truebranch'] = 'WAHR-Zweig';
$string['truebranch_help'] = 'Diese Felder kontrollieren was passiert, wenn die Antwortüberprüfung positiv ausfällt
### Mod und Punkte
Wie die Bepunktung angepasst wird. "=" setzt die Punkte auf einen bestimmten Wert. "+/-" addieren oder subtrahieren Punkte von der aktuellen Summe.

### Abzüge
Im adaptiven oder interaktiven Modus, ziehe so viele Punkte ab.

### Nächster
Soll zu einem nächsten Knoten gesprungen werden, falls ja zu welchen, ansonsten stoppe.

### Antworthinweis
Dieses Tag dient zur Berichterstattung. Es bestimmt den eindeutigen Pfad durch den Baum und das Ergebnis jeder Antwort. Es wird automatisch erzeugt, kann aber auch manuell zu etwas Sinnvollem geändert werden.';
$string['undeploy'] = 'Einsatz zurücknehmen';
$string['unrecognisedfactstags'] = 'Die folgende(n) Angabe(n) wurden nicht erkannt: {$a->tags}.';
$string['variant'] = 'Variante';
$string['variantsselectionseed'] = 'Zufallsgruppe';
$string['variantsselectionseed_help'] = 'Normalerweise kann dies leer gelassen werden. Falls sie aber für zwei verschiedene Aufgaben in einem Test den gleichen Random Seed verwenden wollen, schreiben sie in dieses Feld für beide Aufgaben die gleiche Zeichenkette (und setzen Sie den gleichen Satz Random Seeds ein, wenn Sie eingesetzte Versionen verwenden) und die Random Seeds der beiden Aufgaben werden damit dann synchronisiert.';
$string['verifyquestionandupdate'] = 'Überprüfe den Aufgabentext und aktualisieren die Felder';
$string['youmustconfirm'] = 'Bitte bestätigen Sie hier.';
